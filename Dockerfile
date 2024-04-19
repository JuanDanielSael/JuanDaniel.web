# Dockerfile para la aplicación web

# Utilizamos una imagen base de PHP con Apache
FROM php:7.4-apache

# Instalamos las extensiones necesarias de PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiamos el código de la aplicación al contenedor
COPY ./app /var/www/html

# Configuramos el servidor Apache para que pueda leer el contenido de /var/www/html
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite \
    && service apache2 restart

# Exponemos el puerto 80 para que se pueda acceder a la aplicación desde fuera del contenedor
EXPOSE 80

# Comando por defecto que se ejecuta al iniciar el contenedor
CMD ["apache2-foreground"]
