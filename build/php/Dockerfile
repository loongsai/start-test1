FROM php:5.6-apache

#LOAD MOD REWRITE
RUN a2enmod rewrite

#LOAD PDO FOR MEDOO
RUN docker-php-ext-install pdo pdo_mysql

#LOAD PHP GD + mCrypt
RUN apt-get update --fix-missing && \
apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev libpng-dev && \
docker-php-ext-install -j$(nproc) iconv mcrypt && \
docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/  &&  \
docker-php-ext-install gd -j$(nproc) gd
