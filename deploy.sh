#!/bin/bash

set -e

THEME_DIR="WH_THEME"

if [ "$1" == "prod" ]; then
  echo "Deploying to PROD site 1"
  sshpass -p "$SFTP_PASS_PROD_1" rsync -avz --delete \
    -e "ssh -o StrictHostKeyChecking=no" \
    $THEME_DIR/ $SFTP_USER_PROD_1@$SFTP_HOST_PROD_1:/wp-content/themes/WH_THEME/

  # Repeat for other prod sites
elif [ "$1" == "staging-site-cp" ]; then
  echo "Deploying to CP staging site"
  sshpass -p "$SFTP_PASS_STAGING_1" rsync -avz --delete \
    -e "ssh -o StrictHostKeyChecking=no" \
    $THEME_DIR/ $SFTP_USER_STAGING_1@$SFTP_HOST_STAGING_1:/wp-content/themes/WH_THEME/
fi