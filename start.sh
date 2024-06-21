#!/bin/bash

# Run database migrations
php artisan migrate --force

# Run seeders
php artisan db:seed --force

# Start PHP-FPM
php-fpm
