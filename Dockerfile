# Menggunakan image dasar PHP dengan Apache
FROM php:8.2-apache

# Menginstal ekstensi PHP yang diperlukan
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Menyalin file aplikasi ke dalam container
COPY . /var/www/html/

# Mengatur direktori kerja
WORKDIR /var/www/html

EXPOSE 80