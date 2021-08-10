FROM php:8.0-apache
RUN apt-get update && apt-get upgrade -y && apt-get install -y sudo curl 
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
ENV DOCKERVERSION=20.10.7-ce
RUN curl -fsSLO https://download.docker.com/linux/static/stable/x86_64/docker-20.10.7.tgz \
  && tar xzvf docker-20.10.7.tgz --strip 1 \
                 -C /usr/local/bin docker/docker \
  && rm docker-20.10.7.tgz
RUN echo 'www-data ALL=(ALL) NOPASSWD: /usr/local/bin/docker' >> /etc/sudoers
USER root