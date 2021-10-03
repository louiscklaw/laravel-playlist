#!/usr/bin/env bash

set -ex

sudo rm -rf example-app || true

curl -s https://laravel.build/example-app | bash

cp scripts/init_breeze-react.sh example-app/init_breeze-react.sh

pushd example-app
  ./vendor/bin/sail up -d
  # ./vendor/bin/sail exec laravel.test bash
  # init_breeze-react.sh
  ./vendor/bin/sail exec laravel.test ./init_breeze-react.sh

  sudo chown logic:logic -R .
popd
