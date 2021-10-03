#!/usr/bin/env bash

set -ex

# docker build --no-cache -t logickee/laravel-helloworld-tryout -f dockerfile.laravel .

# docker run -it \
#   --env-file .env.docker \
#   -v $TMP_DIR:/root \
#   -v $PWD/work_dir:/root/work_dir \
#   -v $PWD/laravel_src:/root/laravel_src \
#   -v $PWD/scripts:/root/scripts \
#   -v $TMP_BASH_HISTORY:/root/.bash_history \
#   -v /var/run/docker.sock:/var/run/docker.sock \
#   -p 8000:8000 \
#   logickee/laravel-helloworld-tryout bash

touch example-app/storage/logs/laravel.log

pushd example-app
  docker-compose up -d
popd