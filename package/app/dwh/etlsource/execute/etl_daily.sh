#!/bin/bash
KITCHEN=/usr/local/pentaho/pdi/kitchen.sh
ROOT_DIR=/home/etl

while getopts "k:p:" o
do	case "$o" in
    k)	KITCHEN="$OPTARG";;
    p)	ROOT_DIR="$OPTARG";;
	[?])	echo >&2 "Usage: $0 [-k  pdi-path] [-p dwh-path]"
		exit 1;;
	esac
done

LOGFILE=$ROOT_DIR/logs/etl_daily.log

sh $ROOT_DIR/etlsource/execute/daily.sh -k $KITCHEN -d $ROOT_DIR >> $LOGFILE 2>&1