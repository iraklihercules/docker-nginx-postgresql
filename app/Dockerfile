FROM php:8.2-fpm

RUN apt-get update \
    && apt-get install -y apt-utils \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pgsql \
    && docker-php-ext-install pdo_pgsql;
