#!/usr/bin/env bash

set -ex

# docker-compose exec laravel.test bash

composer require laravel/breeze --dev
php artisan breeze:install vue

npm install
npm run dev
php artisan migrate