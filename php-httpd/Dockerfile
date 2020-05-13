FROM php:7.4-apache


RUN usermod -u 1000 www-data

# To get needed extensions run this:
RUN apt-get update && apt-get upgrade -y 

RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# The .conf(this one is for the development) file mapping:
COPY ./apache.conf /usr/local/apache2/conf/httpd.conf

