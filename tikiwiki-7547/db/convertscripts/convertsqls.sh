#!/bin/sh
# $Header: /cvsroot/tikiwiki/tiki/db/convertscripts/convertsqls.sh,v 1.9 2005-08-18 14:00:36 sylvieg Exp $


VERSION="1.10"

if [ -z $1 ]; then
	echo "Usage: ./convertscript.sh <host> <tikiversion>"
	echo "       where <host> is the virtualhost/root/ for your tiki"
	echo "       and <tikiversion> is the tikiwiki version (automatically set to $VERSION if omitted)"
	exit 0
fi

TIKISERVER=$1
if [ "$2" ] ; then
  VERSION=$2
fi

cp ../tiki.sql ../tiki-$VERSION-mysql.sql
# /* the scripts use mysql.sql */
wget -O pgsql72.sql.tmp "http://$TIKISERVER/db/convertscripts/mysql3topgsql72.php?version=$VERSION" 
wget -O sybase.sql.tmp "http://$TIKISERVER/db/convertscripts/mysql3tosybase.php?version=$VERSION" 
wget -O sqlite.sql.tmp "http://$TIKISERVER/db/convertscripts/mysql3tosqlite.php?version=$VERSION"
wget -O oci8.sql.tmp "http://$TIKISERVER/db/convertscripts/mysql3tooci8.php?version=$VERSION" 

rm -f *.sql.tmp 
rm -f ../tiki-$VERSION-pgsql.sql ../tiki-$VERSION-sybase.sql ../tiki-$VERSION-sqlite.sql ../tiki-$VERSION-oci8.sql

mv $VERSION.to_pgsql72.sql ../tiki-$VERSION-pgsql.sql
mv $VERSION.to_sybase.sql ../tiki-$VERSION-sybase.sql
mv $VERSION.to_sqlite.sql ../tiki-$VERSION-sqlite.sql
mv $VERSION.to_oci8.sql ../tiki-$VERSION-oci8.sql


echo "Done."
exit 0
