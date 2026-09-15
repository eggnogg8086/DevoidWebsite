FROM php:8.3-apache

# Enable Apache rewrite support
RUN a2enmod rewrite

# Allow .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/s/AllowOverride None/AllowOverride All/' \
    /etc/apache2/apache2.conf

# Make the old /iteration3/ path point to the website root
RUN printf '%s\n' \
    'Alias /iteration3/ /var/www/html/' \
    '<Directory /var/www/html>' \
    '    AllowOverride All' \
    '    Require all granted' \
    '</Directory>' \
    > /etc/apache2/conf-available/iteration3.conf \
    && a2enconf iteration3

# Cloud Run listens on 8080
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf \
    && sed -i 's/:80>/:8080>/' /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html