FROM php:7.4-fpm

RUN apt update -y && apt-get install -y \
    libpq-dev \
    git
RUN docker-php-ext-configure pgsql && \
    docker-php-ext-install pdo pdo_pgsql pgsql
RUN php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');" && \
    php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/laravel

COPY ./laravel /var/www/laravel

RUN composer install

EXPOSE 9000

ENTRYPOINT ["/bin/bash", "/var/www/laravel/entrypoint.sh"]
