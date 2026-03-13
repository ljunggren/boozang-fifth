#!/usr/bin/env bash
# Show uncommitted changes on server (useful to detect wp-admin edits)
set -euo pipefail

SERVER="ubuntu@mgmt1bh.boozang.com"
THEME_PATH="/var/www/html/wordpress/wp-content/themes/boozang-fifth"

ssh "$SERVER" "cd $THEME_PATH && git diff"
