FROM php:8.2-apache

COPY . /var/www/html/

RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html/public

EXPOSE 80