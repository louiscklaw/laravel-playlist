#!/usr/bin/env bash

set -ex


pushd /root
  # composer create-project --prefer-dist laravel/laravel laravel_src
  pushd ./laravel_src
    composer i
    php artisan serve --host=0.0.0.0 --port=8000
  popd
popd
