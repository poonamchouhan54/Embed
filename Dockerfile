FROM php:8.1-apache

# Install required system packages for cURL
RUN apt-get update && apt-get install -y \
    libcurl4-openssl-dev \
    pkg-config \
    && rm -rf /var/lib/apt/lists/*

# Install PHP cURL extension
RUN docker-php-ext-install curl

# Copy project files
COPY . /var/www/html/

EXPOSE 80
