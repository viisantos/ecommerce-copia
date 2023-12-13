# Use uma imagem PHP
FROM php:8.1-fpm

# Instale as dependências necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Configure a localização e o fuso horário
RUN echo "date.timezone = UTC" > /usr/local/etc/php/php.ini

# Crie e configure o diretório de trabalho
WORKDIR /var/www/html

# Copie os arquivos do projeto para o contêiner
COPY . .

# Instale as dependências do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

# Exponha a porta 9000 para o Nginx ou outro servidor da web
EXPOSE 9000

# Inicie o servidor PHP-FPM
CMD ["php-fpm"]
