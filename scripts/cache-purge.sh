#!/usr/bin/env bash
# Purge Nginx fastcgi_cache on management server
set -euo pipefail

SERVER="ubuntu@mgmt1bh.boozang.com"

echo "Purging Nginx fastcgi_cache..."
ssh "$SERVER" "sudo rm -rf /var/cache/nginx/wordpress/* && sudo systemctl reload nginx"

echo "Done. Cache purged."
