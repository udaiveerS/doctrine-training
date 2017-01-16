FROM php:7.0-apache

WORKDIR /var/www/html

COPY ./config/localhost.conf /etc/apache2/sites-available/localhost.conf
COPY ./config/php.ini /usr/local/etc/php/php.ini
RUN apt-get update && apt-get install vim -y

RUN rm -rf /etc/apache2/sites-enabled/000-default.conf

RUN mkdir -p /var/lib/php/sessions
RUN mkdir -p /opt/symfony/app/cache
RUN mkdir -p /opt/symfony/app/logs

RUN chown -R www-data:www-data /opt/symfony/app/cache && chown -R www-data:www-data /opt/symfony/app/cache

RUN a2enmod rewrite
RUN a2ensite localhost
