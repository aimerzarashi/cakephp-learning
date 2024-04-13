FROM php:8.3-apache

RUN curl -s https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer

RUN apt-get update \
  && docker-php-ext-install pdo_mysql

COPY ./php/html/ /var/www/html/
COPY ./php/php.ini /usr/local/etc/php/