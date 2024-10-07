# Usar uma imagem oficial do PHP 8.1 com Apache
FROM php:8.1-cli

# Definir o diretório de trabalho dentro do contêiner
WORKDIR /var/www/html

# Instalar dependências do sistema e extensões necessárias do PHP
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar o arquivo composer.json e composer.lock para o contêiner
COPY composer.json composer.lock ./

# Instalar as dependências do Composer
RUN composer install --no-scripts --no-autoloader

# Copiar o restante dos arquivos do projeto para o contêiner
COPY . .

# Instalar dependências do Composer corretamente
RUN composer dump-autoload --optimize

# Expor a porta 3000
EXPOSE 3000

# Comando para rodar o servidor embutido do PHP
CMD [ "php", "-S", "0.0.0.0:3000", "-t", "." ]
