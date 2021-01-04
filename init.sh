#!/usr/bin/env bash

docker-compose build

docker-compose run --no-deps php composer install

if [ "$(basename $PWD)" != "phpdocker" ] ;
then
  rm init.sh

  rm -fr .git
  git init
  git add .
  git commit -m 'Initial commit'
fi