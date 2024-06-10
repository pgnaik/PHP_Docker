#Base image
FROM php:7.4-apache

#Install musqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-enable mysqli
EXPOSE 80


