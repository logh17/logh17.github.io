#!/bin/bash
NAME=$1
CRES=`curl -s https://www.instagram.com/${name}/ | grep og:image`
if [[ "CRES" =~ s150x150 ]]
then
echo $CRES | sed 's,150x150/,s960x960/,g' | sed 's,vp/,,g' | cut -f 4 -d '"'
else
echo $CRES | cut -f 4 -d '"'
fi