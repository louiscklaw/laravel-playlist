#!/usr/bin/env bash

set -ex

sudo rm -rf example-app || true

curl -s https://laravel.build/example-app | bash

cp scripts/init_breeze-react.sh example-app/init_breeze-react.sh
cp scripts/init_breeze-vue.sh example-app/init_breeze-vue.sh
cp scripts/init_laravel_mix.sh example-app/init_laravel_mix.sh

pushd example-app
  ./vendor/bin/sail up -d
  # ./vendor/bin/sail exec laravel.test bash
  # init_breeze-react.sh
  ./vendor/bin/sail exec laravel.test bash
popd
