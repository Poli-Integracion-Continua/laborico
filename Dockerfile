FROM php:7.2-apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
WORKDIR /var/www/html/
COPY . .