FROM debian:buster

LABEL maintainer="qcraghas@student.21-school.ru"
ENV ADMIN="qcraghas"

RUN apt -y update
RUN apt -y install nginx
RUN apt -y install mariadb-server
RUN apt -y install php7.3-fpm php7.3-mysql
RUN apt -y install php
RUN apt -y install php-curl php-gd php-intl php-mbstring
RUN apt -y install php-soap php-xml php-xmlrpc php-zip

RUN     openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
        -keyout /etc/ssl/private/localhost.key \
        -out /etc/ssl/certs/localhost.crt \
        -subj "/C=RU/ST=Moscow/L=Moscow/CN=abcd"

COPY ./srcs/container.sh /
RUN chmod +x /container.sh
COPY ./srcs/db.sql /
RUN chown -R $USER:$qcraghas /var/www/html
COPY ./srcs/qcraghas /etc/nginx/sites-available/
COPY ./srcs/phpMyAdmin /var/www/html/phpMyAdmin
COPY ./srcs/wordpress /var/www/html/wordpress
COPY ./srcs/autoindex.sh /
RUN chmod +x /autoindex.sh
RUN ln -s /etc/nginx/sites-available/qcraghas /etc/nginx/sites-enabled/
RUN rm /etc/nginx/sites-enabled/default

RUN service mysql start; mysql -u root < /db.sql
CMD [ "bash", "container.sh" ]

