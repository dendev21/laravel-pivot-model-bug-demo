#!/bin/bash
set -x
cd /var/www/laravel

php artisan -v migrate --force
php artisan -v db:seed --force
#php artisan demo:sync

php-fpm
