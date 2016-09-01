FROM ubuntu:14.04

MAINTAINER Bouadjadja AbdElKader <ak.bouadjadja@gmail.com>

RUN apt-get update
RUN apt-get install -y apache2
RUN apt-get install -y php5 php5-common php5-cli php5-mysql php5-pgsql
RUN apt-get clean

COPY index.php /var/www/html/

EXPOSE 80
#CMD ["/usr/sbin/apache2ctl start -D FOREGROUND"]  
#CMD ["php /var/www/html/index.php"]
