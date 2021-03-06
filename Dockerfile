FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

RUN apk update && apk add --no-cache \
    build-base shadow curl \
    php7 \
    php7-fpm \
    php7-common \
    php7-pdo \
    php7-pdo_mysql \
    php7-mysqli \
    php7-mcrypt \
    php7-mbstring \
    php7-xml \
    php7-openssl \
    php7-json \
    php7-phar \
    php7-zip \
    php7-gd \
    php7-dom \
    php7-session \
    php7-zlib \
    php-gettext \ 
    gettext \
    nano bash supervisor 

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql

# Copy existing application directory contents
COPY app /var/www/html

COPY app/bb-config-sample.php /var/www/html/bb-config.php
COPY app/.env.example /var/www/html/.env

RUN mkdir /var/www/html/bb-data/uploads

# Copy existing application directory permissions
RUN chown -R www-data:www-data \
    /var/www/html/install \
    /var/www/html/bb-config.php \
    /var/www/html/bb-data/cache \
    /var/www/html/bb-data/log \
    /var/www/html/bb-data/uploads

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]