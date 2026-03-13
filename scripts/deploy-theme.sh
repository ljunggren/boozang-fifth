#!/usr/bin/env bash
# Deploy theme to management server from origin (ljunggren/boozang-fifth)
set -euo pipefail

SERVER="ubuntu@mgmt1bh.boozang.com"
THEME_PATH="/var/www/html/wordpress/wp-content/themes/boozang-fifth"
BRANCH="${1:-master}"

echo "Deploying branch '$BRANCH' to $SERVER..."
ssh "$SERVER" "cd $THEME_PATH && sudo git fetch origin && sudo git checkout $BRANCH && sudo git pull origin $BRANCH"

echo "Done. Theme deployed."
