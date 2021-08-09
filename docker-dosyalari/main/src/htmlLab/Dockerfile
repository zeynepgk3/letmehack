FROM php:7-apache
COPY HTMLinjection.php /var/www/html/HTMLinjection.php
EXPOSE 80
CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND" ]