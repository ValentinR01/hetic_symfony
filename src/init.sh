#!/bin/bash
sleep 5
echo 'Creating Database - If not exists'
php bin/console doctrine:database:create --if-not-exists
echo 'Create Migration'
php bin/console doctrine:migration:migrate
echo 'Create Fixtures'
yes | symfony console doctrine:fixtures:load
echo 'Starting Server'
nginx && php-fpm