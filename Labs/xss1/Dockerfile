FROM php:8-apache
COPY xss1.php /var/www/html/xss1.php
EXPOSE 80
CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND" ]