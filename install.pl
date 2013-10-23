#!/usr/bin/perl

use strict;
use warnings;
use DBI;

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

system ("cd $basedir/elastix && git pull");

################################################################
#This is upgrade for converting recording from wav to mp3 format
#
#
#################################################################


my ($db, $host, $user, $pass) = ('asterisk', 'localhost', 'asteriskuser', 'admin');
my $dbh = DBI->connect("DBI:mysql:database=$db;host=$host",
								  "$user", "$pass", {RaiseError => 1, AutoCommit => 1});


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
		system("grant all on qstats.* to '$user'\@'localhost' identified by '$pass'\" | mysql -u $dbroot --password=$dbrootpass");

		if (! -e "$basedir/elastix/bin/update_mix_mixmonitor.pl") {
			die "fail to find update_mix_mixmonitor!";
		}

		system("chmod a+x $basedir/elastix/bin/update_mix_mixmonitor.pl && ln -s $basedir/elastix/bin/update_mix_mixmonitor.pl /usr/bin/update_mix_mixmonitor.pl");
		
		system("setsid /usr/bin/updatecdr >> /tmp/updatecdr.log 2>&1 &");
	}

	warn `ps aux | grep updatecdr`;
}

