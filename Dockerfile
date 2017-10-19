FROM php
MAINTAINER groupe10
RUN apt-get update
RUN docker-php-ext-install mysqli 
CMD /etc/init.d/apache start
