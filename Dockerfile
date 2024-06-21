FROM agoenxz21/php81-nginx:latest

RUN apk add --update nodejs-current npm

WORKDIR /var/www
COPY --chown=www-data:www-data ./ /var/www
COPY ./supervisord.conf /etc/supervisord.conf
RUN chmod -R 775 /var/www/storage
RUN chown -R www-data:www-data /var/www/storage
COPY ./run.sh /run.sh
RUN chmod +x /run.sh
RUN composer install
# RUN npm install
# RUN npm run build
RUN php artisan cache:clear
EXPOSE 80
ENTRYPOINT ["sh", "/var/www/run.sh"]
