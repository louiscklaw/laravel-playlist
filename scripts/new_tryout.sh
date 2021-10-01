#!/usr/bin/env bash

set -ex

cp -r ./laravel-helloworld-tryout $@

pushd $@
  scripts/test.sh
