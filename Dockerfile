FROM php:7.2-apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN docker-php-ext-install mysqli

WORKDIR /var/www/html/
COPY . .