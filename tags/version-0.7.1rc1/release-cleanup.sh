#!/bin/sh

echo ------------------------------------
echo Running Cleanup Script
echo ------------------------------------

rm -fr CHECKLIST
rm -fr config.php
rm -fr autogen.sh
rm -fr mpd.sql
rm -fr mysql.sql
rm -fr generatedump.php
rm -fr images/cms/*.svg
rm -fr smarty/cms/cache/*
rm -fr smarty/cms/templates_c/*
rm -fr lang/*.sh
find -depth -type d -name .svn -exec rm -fr {} \;
find . -type d -exec chmod 775 {} \;
rm -fr release-cleanup.sh

echo ------------------------------------
echo Done!
echo ------------------------------------
