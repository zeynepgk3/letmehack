FROM php:8-apache
COPY htmlinjection.php /var/www/html/htmlinjection.php
EXPOSE 80
CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND" ]