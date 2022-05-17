FROM php:8.0-cli

RUN apt-get update && apt-get install -y \
    zip unzip && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

# Composerインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /app
