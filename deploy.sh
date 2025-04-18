#!/bin/bash

set -e

THEME_DIR="."

if [ "$1" == "production-sites" ]; then
  echo "Deploying to Clipstone PROD site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/client_181ef524f7_96639/html/wp-content/themes/WH_THEME; quit" \
  -u "$CP_SFTP_USER_PROD","$CP_SFTP_PASS_PROD" sftp://$CP_SFTP_HOST_PROD

  echo "Deploying to Quality Wines PROD site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/client_ec232e5d38_96653/html/wp-content/themes/WH_THEME; quit" \
  -u "$QW_SFTP_USER_PROD","$QW_SFTP_PASS_PROD" sftp://$QW_SFTP_HOST_PROD

  echo "Deploying to 64 Goodge Street PROD site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/client_9bd54dd0c5_96557/html/wp-content/themes/WH_THEME; quit" \
  -u "$GS_SFTP_USER_PROD","$GS_SFTP_PASS_PROD" sftp://$GS_SFTP_HOST_PROD

  echo " Deploying to WH PROD site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/client_9b38867d2_96665/html/wp-content/themes/WH_THEME; quit" \
  -u "$WH_SFTP_USER_PROD","$WH_SFTP_PASS_PROD" sftp://$WH_SFTP_HOST_PROD

  # Repeat for other prod sites
elif [ "$1" == "staging-site-cp" ]; then
  echo "Deploying to CP staging site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/client_f4658e9875_102144/html/wp-content/themes/WH_THEME; quit" \
  -u "$CP_SFTP_USER_STAGING","$CP_SFTP_PASS_STAGING" sftp://$CP_SFTP_HOST_STAGING

elif [ "$1" == "staging-sites" ]; then
  echo "Deploying to QW staging site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/client_f7d7b478e_102145/html/wp-content/themes/WH_THEME; quit" \
  -u "$QW_SFTP_USER_STAGING","$QW_SFTP_PASS_STAGING" sftp://$QW_SFTP_HOST_STAGING

  echo "Deploying to 64 Goodge Street staging site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/client_763e7b247d_97476/html/wp-content/themes/WH_THEME; quit" \
  -u "$GS_SFTP_USER_STAGING","$GS_SFTP_PASS_STAGING" sftp://$GS_SFTP_HOST_STAGING

  echo "Deploying to WH staging site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/client_93bc3c473d_102150/html/wp-content/themes/WH_THEME; quit" \
  -u "$WH_SFTP_USER_STAGING","$WH_SFTP_PASS_STAGING" sftp://$WH_SFTP_HOST_STAGING

  echo "Deploying to CP staging site"
  lftp -e "set sftp:connect-program 'ssh -oStrictHostKeyChecking=no'; mirror -R --delete --verbose $THEME_DIR /home/client_f4658e9875_102144/html/wp-content/themes/WH_THEME; quit" \
  -u "$CP_SFTP_USER_STAGING","$CP_SFTP_PASS_STAGING" sftp://$CP_SFTP_HOST_STAGING

fi