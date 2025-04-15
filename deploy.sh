#!/bin/bash

set -e

THEME_DIR="WH_THEME"

if [ "$1" == "prod" ]; then
  echo "Deploying to PROD site 1"
  sshpass -p "$CP_SFTP_PASS_PROD" rsync -avz --delete \
    -e "ssh -o StrictHostKeyChecking=no" \
    $THEME_DIR/ $CP_SFTP_USER_PROD@$CP_SFTP_HOST_PROD:/wp-content/themes/WH_THEME/

  # Repeat for other prod sites
elif [ "$1" == "staging-site-cp" ]; then
  echo "Deploying to CP staging site"
  echo "SFTP_HOST_STAGING_CP is: ${SFTP_HOST_STAGING_CP:-NOT SET}"
echo "SFTP_USER_STAGING_CP is: ${SFTP_USER_STAGING_CP:-NOT SET}"
echo "SFTP_PASS_STAGING_CP is: ${SFTP_PASS_STAGING_CP:+SET}"  # don't echo password
  sshpass -p "$CP_SFTP_PASS_STAGING" rsync -avz --delete \
    -e "ssh -o StrictHostKeyChecking=no" \
    $THEME_DIR/ $CP_SFTP_USER_STAGING@$CP_SFTP_HOST_STAGING:/wp-content/themes/WH_THEME/
fi