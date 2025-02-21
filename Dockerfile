# Use the official PHP-Apache image
FROM php:apache

# Copy our project files into the Apache root directory
COPY . /var/www/html/

# Set correct permissions for Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80 for web access
EXPOSE 80
