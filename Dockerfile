FROM php:8.2-apache

COPY . /var/www/html/

RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer dump-autoload

WORKDIR /var/www/html