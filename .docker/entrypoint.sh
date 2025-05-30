#!/bin/bash
set -e

chown -R www-data:www-data storage

if [ ! -d "vendor" ]; then
    composer install --no-interaction --optimize-autoloader
fi

# Generate key jika belum ada
if ! grep -q "APP_KEY=base64" .env; then
    php artisan key:generate
fi

# Install Composer dependencies jika folder vendor belum ada
if [ ! -d "vendor" ]; then
    composer install --no-interaction --optimize-autoloader
fi

# php artisan migrate

# Install Nodejs Deps
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.3/install.sh | bash

export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"

# source ~/.bashrc

nvm install --lts
npm install && npm run build


php artisan storage:link

exec apache2-foreground
