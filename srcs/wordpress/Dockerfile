# Utiliser alpine:3.19 comme base
FROM alpine:3.19

# Installer les dépendances nécessaires pour PHP et WordPress
RUN apk update && apk add --no-cache \
    php81 \
    php81-fpm \
    php81-mysqli \
    php81-json \
    php81-curl \
    php81-xml \
    php81-dom \
    php81-ctype \
    php81-mbstring \
    php81-opcache \
    wget \
    bash \
    su-exec

# Créer un répertoire pour WordPress et télécharger une version spécifique de WordPress
WORKDIR /var/www

RUN wget https://wordpress.org/wordpress-6.3.tar.gz && \
    tar -xzf wordpress-6.3.tar.gz && \
    rm wordpress-6.3.tar.gz && \
    mv wordpress/* . && \
    rmdir wordpress

# Copier les fichiers de configuration PHP si nécessaire (optionnel)
#COPY php-fpm.conf /etc/php81/php-fpm.conf

# Exposer uniquement le port PHP-FPM (par défaut 9000)
EXPOSE 9000

# Commande par défaut pour démarrer PHP-FPM
CMD ["php-fpm81", "-F"]