FROM daniloporfirio/apache2php7.4:1.5

USER root
WORKDIR /var/www/html
COPY . /var/www/html/

RUN apt-get update && apt-get install -y \
    freetds-common freetds-bin unixodbc php7.4-sybase

# RUN apt-get install -y tzdata
# RUN cp /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime


RUN a2enmod rewrite


EXPOSE 80

ENTRYPOINT ["/bin/bash", "/usr/sbin/apachectl"]
CMD ["-D", "FOREGROUND"]