#!/usr/bin/env bash

set -ex

mysql -u root  -f -D project < helloworld.sql
