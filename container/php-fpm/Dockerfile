FROM php:fpm

ADD php.ini /usr/local/etc/php/conf.d/php.ini

RUN apt-get update \
	&& docker-php-ext-install pdo_mysql mysqli mbstring

# If you need the package, add it here.

# RUN apt-get update \
# 	&& apt-get install -y libmemcached-dev zlib1g-dev \
# 	&& pecl install memcached-2.2.0 \
# 	&& docker-php-ext-enable memcached
