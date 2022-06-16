FROM mariadb:latest
RUN apt-get update -y
RUN apt-get upgrade -y
ADD sql/sample.sql /docker-entrypoint-initdb.d
EXPOSE 3306