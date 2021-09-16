FROM phpdockerio/php74-fpm:latest
WORKDIR "/app"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        php7.4-imap \ 
        php7.4-memcached \ 
        php7.4-mysql \ 
        php7.4-xdebug; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
