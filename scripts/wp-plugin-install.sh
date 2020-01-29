#!/bin/bash

set -ex
WP_DIR=/var/www/html
cd ${WP_DIR}

array=(`cat scripts/plugins.txt`)
#wp plugin install \
#    classic-editor \
#    advanced-custom-fields \
#    custom-post-type-ui \
#    custom-post-type-permalinks \
#    tinymce-advanced \
#    --activate \
#    --path=${WP_DIR}
