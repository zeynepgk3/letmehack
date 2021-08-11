FROM php:8-apache
COPY authentication.php /var/www/html/authentication.php
EXPOSE 80
CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND" ]