#!/bin/sh
owner="_www"
www="_www"
basedir=`dirname $0`
basedir="$basedir/../src"
dirs="cache"

for directory in $dirs
do
	sudo chown -R $owner:$www "$basedir/$directory"
	sudo chmod -R g+rws "$basedir/$directory"
done
