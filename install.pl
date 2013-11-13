#!/usr/bin/perl

use strict;
use warnings;
use DBI;

my $target  = shift || '';

if ($target eq 'help') {
	print <<EOC;
help: print his msg
konference: install konference
default: install all
EOC

	exit 0;
}

my $basedir = '/salzh';
my $giturl  = '';
my $dbroot  = 'root';
my $dbrootpass = 'root';

if ( -l "/var/www") {
	print "$basedir already exists, no need do jump intial step!\n";
} else {
	mkdir $basedir;

	die "fail to mkdir $basedir!" unless -d $basedir;

	system("cd $basedir && git clone https://github.com/kbehafarin/elastix.git");
	die "fail to pull codes from github!" unless -d "$basedir/elastix/www";

	system ("mv /var/www /var/www.bak && ln -s $basedir/elastix/www /var/www");
	die "/var/www is error" unless -l "/var/www";

	system ("mv /etc/asterisk /etc/asterisk.bak && ln -s $basedir/elastix/asteriskconf /etc/asterisk");
	die "/etc/asterisk" unless -l "/etc/asterisk";
}

system ("cd $basedir/elastix && git pull && pkill yum");

################################################################
#This is upgrade for converting recording from wav to mp3 format
#
#
#################################################################


my ($db, $host, $user, $pass) = ('asterisk', 'localhost', 'asteriskuser', 'admin');
my $dbh = DBI->connect("DBI:mysql:database=$db;host=$host",
								  "$user", "$pass", {RaiseError => 1, AutoCommit => 1});

if ($target eq 'konference') {
	goto konference;
}

if (`ps aux | grep "updatecdr" | grep -v "grep"` =~ /updatecdr/) {
	warn "mp3 recording already installed, INGORE!\n";
} else {
	if (-l "/usr/bin/lame") {
		warn "lame already installed, jump!\n";
	} else {
		system("cd /tmp && wget https://downloads.sourceforge.net/project/lame/lame/3.99/lame-3.99.5.tar.gz");
		if (! -e "/tmp/lame-3.99.5.tar.gz") {
			die "fail to download lame-3.99.5.tar.gz";
		}
	
	
		system("cd /tmp/ && tar zxf lame-3.99.5.tar.gz && cd lame-3.99.5 && ./configure && make && make install");
		system("ln -s /usr/local/bin/lame /usr/bin/lame");

		if (!-e "/usr/local/bin/lame") {
			die "fail to find /usr/local/bin/lame, pls check the installation of lame!"
		}
	}

	if (-l "/usr/bin/wav2mp3") {
		warn "wav2mp3 already installed, jump!\n";
	} else {
		if (! -e "$basedir/elastix/bin/wav2mp3") {
			die "fail to find wav2mp3!";
		}

		system("chmod a+x $basedir/elastix/bin/wav2mp3 && ln -s $basedir/elastix/bin/wav2mp3 /usr/bin/wav2mp3");
	}
		

	$dbh->prepare("delete from globals where variable='MIXMON_POST'")
		->execute();
	$dbh->prepare("insert into globals  (variable,value) values (?, ?)")
		->execute('MIXMON_POST', '/usr/bin/wav2mp3 ^{CALLFILENAME} /var/spool/asterisk/monitor/ ^{MIXMON_FORMAT}');

	system("/var/lib/asterisk/bin/retrieve_conf && asterisk -rx \"reload\"");
	
	my $ok = 0;
	for (split /\n/, `asterisk -rx "dialplan show globals"`) {
		if (index($_, 'MIXMON_POST=/usr/bin/wav2mp3') != -1) {
			$ok = 1;
		}
	}
	if (!$ok) {
		die "fail to set MIXMON_POST, pls check it!\n";
	}

	if (-l "/usr/bin/updatecdr") {
		warn "updatecdr already installed, jump!\n";
	} else {
		if (! -e "$basedir/elastix/bin/updatecdr") {
			die "fail to find updatecdr!";
		}
		
		system("chmod a+x $basedir/elastix/bin/updatecdr && ln -s $basedir/elastix/bin/updatecdr /usr/bin/updatecdr");

		system("chmod a+x /usr/bin/updatecdr");
		
		if (! -l "/usr/bin/updatecdr") {
			die "fail to create updatecdr";
		}
		
		system("echo \"setsid /usr/bin/updatecdr >> /tmp/updatecdr.log 2>&1 &\" > /etc/rc.local");
	}
	
	if (-l "/usr/bin/update_mix_mixmonitor.pl") {
		warn "/usr/bin/update_mix_mixmonitor.pl already installed, jump!\n";
	} else {
		system("echo \"create database qstats\" | mysql -u $dbroot --password=$dbrootpass");
		system("echo \"grant all on qstats.* to '$user'\@'localhost' identified by '$pass'\" | mysql -u $dbroot --password=$dbrootpass");

		if (! -e "$basedir/elastix/bin/update_mix_mixmonitor.pl") {
			die "fail to find update_mix_mixmonitor!";
		}

		system("chmod a+x $basedir/elastix/bin/update_mix_mixmonitor.pl && ln -s $basedir/elastix/bin/update_mix_mixmonitor.pl /usr/bin/update_mix_mixmonitor.pl");
		
		system("echo \"alter table cdr add  recordingfile varchar(255) default ''\" | mysql asteriskcdrdb -u $user --password=$pass");
	}
	
	system("setsid /usr/bin/updatecdr >> /tmp/updatecdr.log 2>&1 &");

	warn `ps aux | grep updatecdr`;
}

################################################################
#This is upgrade for installing mangoanalytics on all PBX
#
#
#################################################################

if (`ps aux | grep "django-tarificador" | grep -v "grep"` =~ /django\-tarificador/) {
	warn "mangoanalytics already installed, INGORE!\n";
} else {
	system("cd $basedir && git clone https://github.com/nextortelecom/mangoanalytics.git");
	if (! -d "$basedir/mangoanalytics") {
		die "fail to get codes from mangoanalytics!\n";
	}

	system ("yum -y install mysql-devel");
	my $p = `uname -p`;
	chomp $p;
	system ("cd $basedir/mangoanalytics/rpm-elastix/RPMS/$p/ && rpm -ivh elastix-python2.7.5-alternate-2.7.5-1.$p.rpm  elastix-python2.7-setuptools-1.1.6-1.$p.rpm elastix-python2.7-distribute-0.6.28-1.$p.rpm");
	system ("cd $basedir/mangoanalytics/rpm-elastix/RPMS/noarch && rpm -ivh mangoanalytics-1.0.2-1.noarch.rpm");
}

################################################################
#This is patch for elastix compile_dir not writable issue
#
#
#################################################################
{
	system ("chmod a+wrx $basedir/elastix/www/html/var/ -R");
}


################################################################
#install fail2ban on elastix servers
#
#
#################################################################
if (`ps aux | grep "fail2ban" | grep -v "grep"` =~ /fail2ban\-server/) {
	warn "fail2ban already installed, INGORE!\n";
} else {
	system("yum -y install fail2ban");
	system("mv /etc/fail2ban /etc/fail2ban.init && ln -s /salzh/elastix/fail2ban /etc/fail2ban");
	

	system("service fail2ban restart");

	if (`ps aux | grep "fail2ban" | grep -v "grep"` =~ /fail2ban\-server/) {
		die "fail to install fail2ban, pls check it!\n";
	}
}

################################################################
#install  latest callback module for freepbx
#
#
#################################################################
{
	print "just update code to install callback\n";
}

################################################################
#install dynamic route module for freepbx with version 2.8x
#
#
#################################################################
{
	system("/var/lib/asterisk/bin/module_admin install dynroute");
	system("/var/lib/asterisk/bin/retrieve_conf");
}

################################################################
#install google voice module for freepbx with version 2.8x
#
#
#################################################################
{
	system("/var/lib/asterisk/bin/module_admin install googlevoice");
	system("/var/lib/asterisk/bin/retrieve_conf");
}

################################################################
#install appkonference  module for asterisk-1.8.20.0 and freepbx with version 2.8x
#
#
#################################################################
konference:
if ($target && $target ne 'konference') {
	exit 0;
}

{
	system("ln -s /salzh/elastix/bin/app_konference.so /usr/lib64/asterisk/modules/app_konference.so");
	system("asterisk -rx \"module load app_konference.so\"");
	system("/var/lib/asterisk/bin/module_admin install konferences");
	system("/var/lib/asterisk/bin/retrieve_conf");
}

################################################################
#install asteriskast of appkonference, prerequirment -  Math::Round
#File::Touch
#
#################################################################
{
	system("cpan -i Math::Round File::Touch");
	system("mysql asterisk -u asteriskuser --password=admin < /salzh/elastix/asterikast/sql/asterikastConferenceManager");
	system("ln -s /salzh/elastix/asterikast/www/ /var/www/html/konf");
	system("setsid /salzh/elastix/asterikast/listener.pl > /dev/null 2>&1");
	print "You can visit http://ip/konf\n";
}
