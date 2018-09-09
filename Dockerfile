FROM php:7.2-apache
RUN apt-get install git \
    && docker-php-ext-install mysqli pdo_mysql \
    && docker-php-ext-enable mysqli pdo_mysql \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer create-project --prefer-dist yiisoft/yii2-app-basic /var/www/yii
COPY src/ /var/www/html/
EXPOSE 80
