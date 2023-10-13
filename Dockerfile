# Use an official PHP image as the base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the contents of your project directory into the container at /var/www/html
COPY . /var/www/html/

# Install mysqli extension for PHP and enable Apache rewrite module
RUN docker-php-ext-install mysqli \
    && a2enmod rewrite

# Start the Apache server when the container starts
CMD ["apache2-foreground"]
