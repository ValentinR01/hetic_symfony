#!/bin/bash
sleep 15
echo 'Creating Database - If not exists'
php bin/console doctrine:database:create --if-not-exists
echo 'Create Migration'
php bin/console doctrine:migration:migrate
echo 'Starting Server'
nginx && php-fpm 

