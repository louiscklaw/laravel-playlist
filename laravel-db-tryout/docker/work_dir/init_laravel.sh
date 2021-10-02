#!/usr/bin/env bash

set -ex

pushd /laravel_src
  php artisan serve --host=0.0.0.0 --port=8000
popd