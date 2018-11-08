FROM php:7.1

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install -y git zlib1g-dev libicu-dev g++ vim

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

RUN docker-php-ext-configure zip
RUN docker-php-ext-install zip

ADD date.ini /usr/local/etc/php/conf.d/date.ini