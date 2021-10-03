#!/usr/bin/env bash

set -ex

sudo rm -rf laravel-starter-kits-tryout || true

sudo chown logic:logic -R laravel-db-tryout

cp -r ./laravel-db-tryout laravel-starter-kits-tryout

pushd laravel-starter-kits-tryout
  chmod +x scripts/*.sh
