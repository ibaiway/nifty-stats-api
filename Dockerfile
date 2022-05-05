FROM php:8.0.3-fpm-buster


RUN docker-php-ext-install bcmath pdo_mysql
RUN apt-get update
RUN apt-get install -y git zip unzip iputils-ping nano
RUN pecl install xdebug
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


WORKDIR /var/www

EXPOSE 9000
