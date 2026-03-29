#!/bin/bash
# Railway deployment script

# Install PHP extensions if needed
apt-get update && apt-get install -y php8.5-cli php8.5-curl php8.5-fileinfo php8.5-openssl 2>/dev/null || true

# Navigate to app directory
cd /app

# Install composer dependencies
if [ -f composer.json ]; then
    composer install --no-dev --optimize-autoloader
fi

# Create necessary directories
mkdir -p storage/logs storage/framework/cache/data storage/framework/sessions storage/framework/views bootstrap/cache

# Set permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache

echo "Deployment setup complete"
