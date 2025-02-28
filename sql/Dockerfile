FROM mysql:8.0

ENV MYSQL_ROOT_PASSWORD=my-secret-pw
ENV MYSQL_DATABASE=test_database
#ENV MYSQL_USER=root
ENV MYSQL_PASSWORD=my-secret-pw

VOLUME /var/lib/mysql

COPY script.sql /docker-entrypoint-initdb.d/

#COPY my_library.dll /usr/lib/my_library.dll

EXPOSE 3306

CMD ["docker-entrypoint.sh", "mysqld"]