#!/usr/bin/perl

use strict;
use warnings;

my $basedir = '/salzh';
my $giturl  = '';
if ( -d $basedir) {
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

