FROM php:7.4-apache
RUN docker-php-ext-install mysqli

# Ci dessous, c'est xdebug, afin d'avoir un var_dump sympathique.
# Ajouter "XDEBUG_CONFIG: remote_host=host.docker.internal remote_port=9000 remote_enable=1" dans le docker-compose du service php.
# Ex: environment:
#       XDEBUG_CONFIG: remote_host=host.docker.internal remote_port=9000 remote_enable=1
RUN pecl install -f xdebug
RUN echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini;
