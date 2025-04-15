#!/bin/bash

set -e

THEME_DIR="."

if [ "$1" == "prod" ]; then
  echo "Deploying to PROD site 1"
  sshpass -p "$CP_SFTP_PASS_PROD" rsync -avz --delete \
    -e "ssh -o StrictHostKeyChecking=no" \
    $THEME_DIR/ $CP_SFTP_USER_PROD@$CP_SFTP_HOST_PROD:/wp-content/themes/WH_THEME/

  # Repeat for other prod sites
elif [ "$1" == "staging-site-cp" ]; then
  echo "Deploying to CP staging site"

  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/RM7qiPYBbqQ8XP/html/wp-content/themes/WH_THEME; quit" \
  -u "$CP_SFTP_USER_STAGING","$CP_SFTP_PASS_STAGING" sftp://$CP_SFTP_HOST_STAGING

fi