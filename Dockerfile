FROM php:8.2-fpm

# Install extensions
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip curl libpng-dev libicu-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd intl


# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

RUN mkdir writable
RUN chown -R www-data:www-data /var/www/html/writable && chmod -R 775 /var/www/html/writable
