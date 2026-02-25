FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY symfony-vue-app/composer.json symfony-vue-app/composer.lock* ./

RUN composer install --no-interaction --no-scripts --prefer-dist

COPY symfony-vue-app/ .

RUN composer dump-autoload --optimize

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
