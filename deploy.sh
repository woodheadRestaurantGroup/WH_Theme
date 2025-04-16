#!/bin/bash

set -e

THEME_DIR="."

if [ "$1" == "prod" ]; then
  echo "Deploying to Clipstone PROD site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/RM7qiPYBbqQ8XP/html/wp-content/themes/WH_THEME; quit" \
  -u "$CP_SFTP_USER_PROD","$CP_SFTP_PASS_PROD" sftp://$CP_SFTP_HOST_PROD

  echo "Deploying to Quality Wines PROD site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/RM7qiPYBbqQ8XP/html/wp-content/themes/WH_THEME; quit" \
  -u "$QW_SFTP_USER_PROD","$QW_SFTP_PASS_PROD" sftp://$QW_SFTP_HOST_PROD

  echo "Deploying to 64 Goodge Street PROD site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/RM7qiPYBbqQ8XP/html/wp-content/themes/WH_THEME; quit" \
  -u "$64GS_SFTP_USER_PROD","$64GS_SFTP_PASS_PROD" sftp://$64GS_SFTP_HOST_PROD

  # Repeat for other prod sites
elif [ "$1" == "staging-site-cp" ]; then
  echo "Deploying to CP staging site"

  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/RM7qiPYBbqQ8XP/html/wp-content/themes/WH_THEME; quit" \
  -u "$CP_SFTP_USER_STAGING","$CP_SFTP_PASS_STAGING" sftp://$CP_SFTP_HOST_STAGING

elif [ "$1" == "staging-site-qw" ]; then
  echo "Deploying to QW staging site"

  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/RM7qiPYBbqQ8XP/html/wp-content/themes/WH_THEME; quit" \
  -u "$QW_SFTP_USER_STAGING","$QW_SFTP_PASS_STAGING" sftp://$QW_SFTP_HOST_STAGING

fi