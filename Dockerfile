FROM php:8.2-apache

RUN a2enmod rewrite

COPY . /var/www/html/

RUN docker-php-ext-install mysqli pdo pdo_mysql

# đổi DocumentRoot sang public
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# cho phép .htaccess hoạt động
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

EXPOSE 80