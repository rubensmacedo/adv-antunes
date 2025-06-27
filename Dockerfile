FROM php:7.4-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install additional dependencies
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy WordPress files
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Create uploads directory with proper permissions
RUN mkdir -p /var/www/html/wp-content/uploads \
    && chown -R www-data:www-data /var/www/html/wp-content/uploads \
    && chmod -R 755 /var/www/html/wp-content/uploads

EXPOSE 80

CMD ["apache2-foreground"]