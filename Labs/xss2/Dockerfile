FROM php:8-apache
COPY xss2.php /var/www/html/xss2.php
EXPOSE 80
CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND" ]