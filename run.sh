#!/bin/sh
cd /var/www
chmod -R 775 /var/www/storage
chown -R www-data:www-data /var/www/storage

php artisan migrate
php artisan cache:clear
php artisan storage:link

chown  www-data:www-data  /var/www/storage/logs/laravel.log
supervisord -c /var/www/supervisord.conf
