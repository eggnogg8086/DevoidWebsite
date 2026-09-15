FROM php:8.3-apache

# Enable Apache URL rewriting
RUN a2enmod rewrite

# Allow .htaccess files
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' \
    /etc/apache2/apache2.conf

# Cloud Run expects the application to listen on port 8080
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf \
    && sed -i 's/:80>/:8080>/' /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html