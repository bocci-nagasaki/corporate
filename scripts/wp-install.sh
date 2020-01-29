#!/bin/bash

set -ex
WP_DIR=/var/www/html
cd ${WP_DIR}
export $(cat /tmp/scripts/.env | grep -v ^# | xargs)

wp core download --locale=ja --path=${WP_DIR}

wp config create \
  --dbname=$DBNAME \
  --dbuser=$DBUSER \
  --dbpass=$DBPASS \
  --dbhost=$DBHOST \
  --dbprefix=$DBPREFIX \
  --force \
  --path=${WP_DIR}

wp core install \
    --url=localhost:8080 \
    --title="bocci corporate site" \
    --admin_user=admin \
    --admin_password=admin \
    --admin_email=bocci@example.com \
    --path=${WP_DIR}

bash /tmp/scripts/wp-plugin-install.sh