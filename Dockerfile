FROM php:8.2-apache

# copy source code
COPY . /var/www/html/

# bật mod_rewrite
RUN a2enmod rewrite

# cài extension php
RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html/public

EXPOSE 80