FROM php:7.2-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli
COPY index.php /var/www/html/index.php
EXPOSE 80