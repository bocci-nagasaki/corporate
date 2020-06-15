#!/bin/bash

set -ex
cd /var/www/html
rm -f /tmp/scripts/plugins.txt
array=(`wp plugin list --format=csv`)

i=0
for v in ${array[@]}; do
  if [ $i -gt 0 ]; then
    echo "$i => $v"
    arr=(`echo ${v//,/ }`)
    echo ${arr[0]} >> /tmp/scripts/plugins.txt
  fi
  i=$(expr $i + 1)
done
