FROM php:7.2-apache
RUN apt-get update \
    && apt-get install -y git zip unzip \
    && docker-php-ext-install mysqli pdo_mysql \
    && docker-php-ext-enable mysqli pdo_mysql \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer create-project --prefer-dist yiisoft/yii2-app-basic /var/www/yii
COPY src/ /var/www/html/
EXPOSE 80
# EXPOSE 8081
# RUN service apache2 start
# RUN /usr/sbin/apache2ctl -D FOREGROUND
# ENTRYPOINT service apache2 start
ENTRYPOINT  /./var/www/yii/yii serve 0.0.0.0:80 
# CMD usr/sbin/apache2ctl -D FOREGROUND
# CMD /usr/sbin/apache2ctl -D FOREGROUND