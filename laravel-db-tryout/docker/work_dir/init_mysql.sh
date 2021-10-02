#!/usr/bin/env bash

set -ex

mysql -u root  -f -D project < ./sql/helloworld.sql
mysql -u root  -f -D project < ./sql/users.sql
