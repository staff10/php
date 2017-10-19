FROM php:apache
MAINTAINER groupe10
RUN docker-php-ext-install mysqli 
