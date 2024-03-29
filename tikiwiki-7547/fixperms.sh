#!/bin/sh
# $Header: /cvsroot/tikiwiki/tiki/fixperms.sh,v 1.8 2006-11-07 14:21:51 mose Exp $

# Copyright (c) 2002-2004, Luis Argerich, Garland Foster, Eduardo Polidor, et. al.
# All Rights Reserved. See copyright.txt for details and a complete list of authors.
# Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.

# This file is a replacement for setup.sh
# in test in 1.9 version

DIRS="backups db dump img/wiki img/wiki_up img/trackers modules/cache temp temp/cache templates_c templates styles maps whelp mods files"

if [ -d 'lib/Galaxia' ]; then
	DIRS=$DIRS" lib/Galaxia/processes"
fi

AUSER=nobody
AGROUP=nobody
VIRTUALS=""

USER=`whoami`
UNAME=`uname | cut -c 1-6`

if [ -f /etc/debian_version ]; then
	AUSER=www-data
	AGROUP=www-data
fi

if [ -f /etc/redhat-release ]; then
	AUSER=apache
	AGROUP=apache
fi

if [ -f /etc/gentoo-release ]; then
	AUSER=apache
	AGROUP=apache
fi

if [ "$UNAME" = "CYGWIN" ]; then
	AUSER=SYSTEM
	AGROUP=SYSTEM
fi

if [ -z $1 ]; then
	echo -n "Command [fix,open]: "
	read COMMAND
else
	COMMAND=$1
fi

if [ "$COMMAND" = 'fix' ]; then
	if [ "$USER" = 'root' ]; then
		echo -n "User [$AUSER]: "
		read 
		if [ -n "$REPLY" ]; then
			AUSER=$REPLY
		fi
	else
		echo "You are not root. ctrl-c to break now."
		read 
		AUSER=$USER
	fi

	echo -n "Group [$AGROUP]: "
	read 
	if [ -n "$REPLY" ]; then
		AGROUP=$REPLY
	fi

	echo -n "Multi []: "
	read VIRTUALS

	if [ -n "$VIRTUALS" ]; then
		touch db/virtuals.inc
		for vdir in $VIRTUALS; do
			echo $vdir >> db/virtuals.inc
			cat db/virtuals.inc | sort | uniq > db/virtuals.inc_new
			rm -f db/virtuals.inc && mv db/virtuals.inc_new db/virtuals.inc
		done
	fi

	echo "Checking dirs : "
	for dir in $DIRS; do
		echo -n "  $dir ... "
		if [ ! -d $dir ]; then
			echo -n " Creating directory"
			mkdir -p $dir
		fi
		echo " ok."
		if [ -n $VIRTUALS ]; then
			for vdir in $VIRTUALS; do
				echo -n "  $dir/$vdir ... "
				if [ ! -d "$dir/$vdir" ]; then
					echo -n " Creating Directory"
					mkdir -p "$dir/$vdir"
				fi
				echo " ok."
			done
		fi
	done
	
	echo -n "Fix global perms ..."
	chown -R $AUSER:$AGROUP .
	echo -n " chowned ..."
	find . ! -regex '.*^\(devtools\).*' -type f -exec chmod 644 {} \;
	chmod og+x setup.sh fixperms.sh
	echo -n " files perms fixed ..."
	find . -type d -exec chmod 755 {} \;
	echo " dirs perms fixed ... done"
	
	echo -n "Fix special dirs ..."
	if [ "$USER" = 'root' ]; then
		for d in $DIRS; do
			find $d -type d -exec chmod 775 {} \;
			find $d -type f -exec chmod 664 {} \;
			chmod 664 robots.txt tiki-install.php
		done
	else
		for d in $DIRS; do
			find $d -type d -exec chmod 777 {} \;
			find $d -type f -exec chmod 666 {} \;
			chmod 666 robots.txt tiki-install.php
		done
	fi
	echo " done."

elif [ "$COMMAND" = 'open' ]; then
	if [ "$USER" = 'root' ]; then
		echo -n "User [$AUSER]: "
		read 
		if [ -n "$REPLY" ]; then
			AUSER=$REPLY
		fi		
		echo -n "Open global perms ..."
		chown -R $AUSER .
		echo " done"
	else
		echo "You are not root. ctrl-c to break now."
		read 
		echo -n "Open global perms ..."
		find . -type d -exec chmod 777 {} \;
		find . -type f -exec chmod 666 {} \;
		echo " done"
	fi
else
	echo "Type 'fix' or 'open' as command argument."
fi

chmod +x $0
exit 0

