#!/usr/bin/env bash

set -ex


pushd /root
  pushd ./myFstProject
    php artisan serve --host=0.0.0.0 --port=8000
  popd
popd
