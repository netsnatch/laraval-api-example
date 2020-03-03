FROM php:7.4-fpm
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y apt-utils

RUN apt-get install -y unzip git;

RUN docker-php-ext-install -j$(nproc) pdo_mysql bcmath opcache;
