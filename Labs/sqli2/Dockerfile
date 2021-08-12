FROM php:8-apache
COPY sqli2.php /var/www/html/sqli2.php
EXPOSE 80
CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND" ]