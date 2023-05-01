FROM php:8.1-apache AS php_image

# Install mysqli extension
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy PHP files
COPY total.php /var/www/html/

# Set up access control list
RUN chown -R www-data:www-data /var/www/html/ && \
    chmod -R ug-w,o-rwx /var/www/html/
