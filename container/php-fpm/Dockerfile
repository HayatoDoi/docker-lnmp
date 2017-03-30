FROM php:fpm

ADD php.ini /usr/local/etc/php/conf.d/php.ini

# Installation of required package
RUN apt-get update && \
	docker-php-ext-install pdo_mysql mysqli mbstring && \
	apt-get install -y \
# If you need the package, add it here.
	git \
	unzip

# Installation of A composer and laravel command
RUN php -r "readfile('https://getcomposer.org/installer');" | php \
	&& mv composer.phar /usr/local/bin/composer \
	&& composer global require "laravel/installer"


# RUN apt-get install -y libmemcached-dev zlib1g-dev \
# 	&& pecl install memcached-2.2.0 \
# 	&& docker-php-ext-enable memcached
