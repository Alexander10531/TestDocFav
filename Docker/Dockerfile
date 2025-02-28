FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    unzip \
    curl \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && docker-php-ext-install pdo pdo_mysql
    
COPY . .

RUN composer install

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080", "index.php"]
