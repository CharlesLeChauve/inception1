FROM alpine:3.19

RUN apk update && apk add --no-cache mariadb mariadb-client

# Copier les fichiers de configuration si nécessaire (optionnel)
#COPY my.cnf /etc/mysql/my.cnf

EXPOSE 3306

# Commande par défaut pour démarrer MariaDB
CMD ["mysqld", "--user=mysql"]
