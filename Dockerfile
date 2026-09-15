FROM php:8.3-apache

# Enable required Apache modules
RUN a2enmod rewrite dir

# Old /iteration3/ path compatibility
RUN printf '%s\n' \
    'Alias /iteration3/ /var/www/html/' \
    '<Directory /var/www/html>' \
    '    Options FollowSymLinks' \
    '    AllowOverride All' \
    '    Require all granted' \
    '    DirectoryIndex index.php index.html' \
    '    DirectorySlash On' \
    '</Directory>' \
    > /etc/apache2/conf-available/devoid.conf \
    && a2enconf devoid

# Cloud Run uses port 8080
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf \
    && sed -i 's/:80>/:8080>/' /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html