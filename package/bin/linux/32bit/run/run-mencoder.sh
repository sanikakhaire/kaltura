#!/bin/bash
KALTURA_BIN=@BIN_DIR@
KALTURA_BIN_DIRS=$KALTURA_BIN
KALTURA_BIN_FFMPEG=$KALTURA_BIN_DIRS/ffmpeg-dir
KALTURA_BIN_MENCODER=$KALTURA_BIN_DIRS/mencoder-dir
KALTURA_BIN_MENCODER_CODECS=$KALTURA_BIN_MENCODER/codecs
MPLAYER_HOME=$KALTURA_BIN_MENCODER
export MPLAYER_HOME
LD_LIBRARY_PATH=$KALTURA_BIN_MENCODER:$KALTURA_BIN_FFMPEG/lib:$KALTURA_BIN_MENCODER_CODECS $KALTURA_BIN_MENCODER/mencoder "$@"
