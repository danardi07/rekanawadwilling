FROM php:8.3-fpm-alpine

# Install dependencies
RUN apk update && apk add --no-cache \
    bash \
    curl \
    git \
    unzip \
    libzip-dev \
    oniguruma-dev \
    nginx \
    nodejs \
    npm \
    icu-dev \
    zlib-dev \
    g++ \
    make \
    autoconf \
    gcc \
    libjpeg-turbo-dev \
    libpng-dev \
    freetype-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mbstring \
        zip \
        gd \
        intl \
        bcmath \
        opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Install Laravel dependencies
RUN composer install --no-interaction --optimize-autoloader

# Set file permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage /var/www/bootstrap

EXPOSE 9000

CMD ["php-fpm"]
