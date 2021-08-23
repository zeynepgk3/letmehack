FROM php:8-apache
RUN apt-get update && apt-get upgrade -y && apt-get install -y sudo curl 
RUN apt-get install whois && apt -y install netbase
COPY ce1.php /var/www/html/ce1.php
EXPOSE 80
CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND" ]