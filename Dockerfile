FROM php:7.1-apache
COPY ./php.ini /usr/local/etc/php/
COPY VuSpace/ /var/www/html/VuSpace
COPY ./apache/000-default.conf /etc/apache2/sites-available/
COPY ./apache/default-ssl.conf /etc/apache2/sites-available/
COPY ./apache/apache2.conf /etc/apache2/
COPY ./ssl/server.crt /etc/ssl/certs/server.crt
COPY ./ssl/server.key /etc/ssl/private/server.key
ADD ./vendor.tar /var/www/html/VuSpace/

RUN apt-get update \
    && apt-get install -y nano libmcrypt-dev \
    && pecl install mcrypt-1.0.0 \ 
    && docker-php-source extract \
    && docker-php-ext-install pdo pdo_mysql mysqli\
    && docker-php-ext-enable mcrypt mysqli\
    && docker-php-source delete \
    && a2enmod rewrite \
    && a2enmod ssl \
    && service apache2 restart \
    && php VuSpace/requirements.php

EXPOSE 80
EXPOSE 443
