FROM php:7.4-apache

RUN apt-get update

# Instalacion de Postgre PDO
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Se activa las opciones de rewrite dado que tiene .htacces la API. Posteriormente se reinicia apache para que detecte los cambios
RUN a2enmod rewrite
RUN service apache2 restart

# Copia las api a la carpeta html que se encuentra en apache
COPY /APIOpciones /var/www/html/APIOpciones
COPY /APIPois /var/www/html/APIPois

EXPOSE 80