FROM alpine:3.19

# Installer NGINX et OpenSSL
RUN apk update && apk add --no-cache nginx openssl

# Créer les répertoires nécessaires pour NGINX
RUN mkdir -p /run/nginx

# Copier les fichiers de configuration
COPY nginx.conf /etc/nginx/nginx.conf
COPY ssl/server.crt /etc/nginx/ssl/server.crt
COPY ssl/server.key /etc/nginx/ssl/server.key

# Exposer le port HTTPS (443)
EXPOSE 443

# Démarrer NGINX via le script entrypoint
CMD ["nginx", "-g", "daemon off;"]