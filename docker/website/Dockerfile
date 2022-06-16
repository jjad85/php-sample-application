FROM php:7.2-apache
RUN apt-get update && apt-get install wget -y && apt-get install unzip -y && apt-get install nano -y
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
