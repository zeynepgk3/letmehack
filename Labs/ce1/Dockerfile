FROM php:8-apache
RUN apt-get update && apt-get upgrade -y && apt-get install -y sudo curl 
RUN apt-get install whois && apt -y install netbase
COPY ce1.php /var/www/html/ce1.php
COPY Flag-Tebrikler.txt /var/www/html/Flag-Tebrikler.txt
EXPOSE 80
CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND" ]