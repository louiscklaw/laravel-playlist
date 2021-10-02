#!/usr/bin/env bash

set -ex

cat  ./sql/helloworld.sql ./sql/users.sql > /tmp/temp.sql

mysql -u root -p -f -D project < /tmp/temp.sql
# mysql -u root -p -f -D project <
