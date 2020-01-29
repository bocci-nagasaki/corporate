#!/bin/bash

set -ex;
WPINSTALLDIR=/var/www/html

wp core download \
    --locale=ja \
    --version=5.3.2 \
    --path=${WPINSTALLDIR}

wp config create \
    --dbname=wordpress \
    --dbuser=scott \
    --dbpass=tiger \
    --dbhost=db:3306 \
    --force --path=${WPINSTALLDIR}

wp core install \
    --url=localhost \
    --title="bocci corporate site" \
    --admin_user=hogehoge \
    --admin_password=passpasspass \
    --admin_email=bocci@example.com \
    --path=${WPINSTALLDIR} 

wp plugin install \
    classic-editor \
    advanced-custom-fields \
    custom-post-type-ui \
    custom-post-type-permalinks \
    tinymce-advanced \
    --activate \
    --path=${WPINSTALLDIR}
