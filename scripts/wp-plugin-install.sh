#!/bin/bash

set -e
WP_DIR=/var/www/html
cd ${WP_DIR}

array=(`cat /tmp/scripts/plugins.txt`)
echo ${array[@]}
for v in ${array[@]}; do
  wp plugin install $v --activate --path=${WP_DIR} || true
done
