FROM php:7.2-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli
COPY ./fetch-data.php /var/www/html/fetch-data.php
COPY ./insert-data.php /var/www/html/insert-data.php
COPY ./index.php /var/www/html/index.php
COPY ./ssp.class.php /var/www/html/ssp.class.php
EXPOSE 80