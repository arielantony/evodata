#!/usr/bin/env bash

#PATH=$PATH

DIR=tp1_datasets/*
for f1 in $DIR
do
  echo "P1 Process: $f1"
  for f2 in $f1/*
  do
    echo "Processing $f2"
    while IFS= read -r line;
    do
      #execute the commands for retrieving database schemas
      filename="schema_$line.sql"
      /usr/bin/svn cat -r "$line" http://svn.code.sf.net/p/tikiwiki/code/trunk/db/tiki.sql > "$filename"
      mv $filename "$f1/schemas/$filename"
    done < $f2
  done
done
