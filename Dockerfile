# Usa PHP 8.3 con Apache
FROM php:8.3-apache AS php
LABEL maintainer="Daniel Dueñas <dduenas@niomads.com>"

# Establece directorio de trabajo
WORKDIR /var/www/html

# Configura Document Root para Apache
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Habilita mod_rewrite
RUN a2enmod rewrite

# Instala dependencias del sistema
RUN apt-get update -y && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip zip \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    git \
    libonig-dev \
    libxml2-dev \
    curl

# Configura y compila extensiones de PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_mysql \
        zip \
        gd \
        intl \
        bcmath \
        opcache \
        xml \
        pcntl \
        sockets

# Instala y habilita Redis
RUN pecl install redis && docker-php-ext-enable redis

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Opcional: Aumenta el límite de memoria de PHP
# RUN echo 'memory_limit = 512M' > /usr/local/etc/php/conf.d/memlimit.ini

# Expone el puerto 80
EXPOSE 80
