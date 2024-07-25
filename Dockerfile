# Usar a imagem base do PHP com Apache
FROM php:8.2-apache

# Instale dependências do sistema e utilitários adicionais
RUN apt-get update && apt-get install -y \
    zip unzip git libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev \
    libzip-dev libicu-dev libxslt1-dev libpq-dev libsqlite3-dev \
    libcurl4-openssl-dev pkg-config libssl-dev

# Instale extensões PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mysqli gd mbstring xml intl xsl zip opcache \
    && docker-php-ext-install soap bcmath exif pcntl pdo_pgsql pdo_sqlite curl sockets

# Copiar o código da aplicação para o diretório /var/www/html
COPY . /var/www/html

# Definir permissões corretas
RUN chown -R www-data:www-data /var/www/html
RUN a2enmod rewrite

# Configurar o diretório de trabalho
WORKDIR /var/www/html

# Instalar dependências do Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Rodar o Composer para instalar as dependências do Laravel
RUN composer install
