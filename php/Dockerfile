FROM php:8.3-apache

RUN apt-get update \
  && docker-php-ext-install pdo_mysql

COPY ./php/html/ /var/www/html/
COPY ./php/php.ini /usr/local/etc/php/