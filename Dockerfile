# Use the official PHP image as a base image
FROM php:8.2-fpm

# Set the working directory inside the container
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libonig-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js and npm
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs

# Copy composer.json and composer.lock
COPY composer.json composer.lock ./

# Install composer dependencies (run composer install without the --no-dev flag for development)
RUN composer install --no-interaction --no-plugins --no-scripts --no-dev

# Copy the rest of the application code
COPY . .

# Generate the Laravel application key
RUN php artisan key:generate

# Set the permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache

RUN echo "memory_limit=512M" > /usr/local/etc/php/conf.d/docker-php-memory-limit.ini


# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
