#!/bin/bash

# Tunggu dependensi (opsional, untuk database eksternal)
sleep 2

# Pastikan direktori Laravel bisa ditulis
chown -R www-data:www-data /var/www/html
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Laravel setup
php artisan config:clear
php artisan session:table
php artisan migrate --force
php artisan storage:link

# Jalankan PHP-FPM dan Nginx
php-fpm -D
nginx -g "daemon off;"

