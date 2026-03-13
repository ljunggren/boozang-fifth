#!/usr/bin/env bash
# Sync fork with upstream (karinlj/boozang-fifth)
set -euo pipefail

cd "$(dirname "$0")/../theme"

echo "Fetching upstream..."
git fetch upstream

echo "Merging upstream/master into local master..."
git checkout master
git merge upstream/master

echo "Pushing to origin (ljunggren/boozang-fifth)..."
git push origin master

echo "Done. Fork is up to date with upstream."
