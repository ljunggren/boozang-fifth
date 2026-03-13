#!/usr/bin/env bash
# Show theme status on management server
set -euo pipefail

SERVER="ubuntu@mgmt1bh.boozang.com"
THEME_PATH="/var/www/html/wordpress/wp-content/themes/boozang-fifth"

echo "=== Remote ==="
ssh "$SERVER" "cd $THEME_PATH && git remote -v"

echo ""
echo "=== Branch ==="
ssh "$SERVER" "cd $THEME_PATH && git branch --show-current"

echo ""
echo "=== Last commit ==="
ssh "$SERVER" "cd $THEME_PATH && git log -1 --oneline"

echo ""
echo "=== Status ==="
ssh "$SERVER" "cd $THEME_PATH && git status --short"
