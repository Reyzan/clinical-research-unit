#!/bin/bash
# Laravel Permission Fix Script

# Fix file permissions (664)
find app/ -type f -exec chmod 664 {} \;
find database/ -type f -exec chmod 664 {} \;
find config/ -type f -exec chmod 664 {} \;
find resources/ -type f -exec chmod 664 {} \;
find routes/ -type f -exec chmod 664 {} \;

# Fix directory permissions (775)
find app/ -type d -exec chmod 775 {} \;
find database/ -type d -exec chmod 775 {} \;
find config/ -type d -exec chmod 775 {} \;
find resources/ -type d -exec chmod 775 {} \;
find routes/ -type d -exec chmod 775 {} \;

# Fix storage and bootstrap/cache (critical for Laravel)
chmod -R 775 storage bootstrap/cache
find storage -type f -exec chmod 664 {} \;
find bootstrap/cache -type f -exec chmod 664 {} \;

echo "✓ Permissions fixed!"
