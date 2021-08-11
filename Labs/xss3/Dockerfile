FROM php:8-apache
COPY xss3.php /var/www/html/xss3.php
EXPOSE 80
CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND" ]