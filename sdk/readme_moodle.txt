#!/bin/bash
# Run this script from the sdk folder
# Update version.php verion and release
# Manually test that the SDK can be used with no issues.

SDKDIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"


find $SDKDIR -mindepth 1 -maxdepth 1 | grep -v readme_moodle.txt | xargs rm -rf
wget -O $SDKDIR/sdk.zip "http://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.zip"
unzip $SDKDIR/sdk.zip -d $SDKDIR
sed -i -e 's/require/require_once/g' $SDKDIR/aws-autoloader.php
sed -i -e 's#GuzzleHttp/functions.php#GuzzleHttp/functions_include.php#g' $SDKDIR/aws-autoloader.php
sed -i -e 's#GuzzleHttp/Psr7/functions.php#GuzzleHttp/Psr7/functions_include.php#g' $SDKDIR/aws-autoloader.php
sed -i -e 's#GuzzleHttp/Promise/functions.php#GuzzleHttp/Promise/functions_include.php#g' $SDKDIR/aws-autoloader.php
sed '2 i }'  $SDKDIR/aws-autoloader.php
sed '2 i     return;'   $SDKDIR/aws-autoloader.php
sed '2 i if ($CFG->version > 2023100900 ||  during_initial_install() || isset($CFG->upgraderunning)) {'   $SDKDIR/aws-autoloader.php
sed '2 i global $CFG;'   $SDKDIR/aws-autoloader.php

# sed -i -e 's#public function count()#public function count(): int#g' $SDKDIR/GuzzleHttp/Handler/MockHandler.php
rm $SDKDIR/sdk.zip
echo
echo 'Go update version.php'
echo $SDKDIR
VERS=$(sed '3q;d' CHANGELOG.md | awk '{print $2}')
echo $VERS
cd ..
sed -i -e '30s/.*/$plugin->release = "'$VERS'";/' version.php
sed -i -e '6s/.*/        <version>'$VERS'<\/version>/' thirdpartylibs.xml
git add sdk
git commit -am $VERS
// git push ewa
