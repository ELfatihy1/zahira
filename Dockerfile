# Utilisation d'une image PHP avec Apache 7.4
FROM php:7.4-apache

# Définition du répertoire de travail dans le conteneur
WORKDIR /var/www/html

# Copie des fichiers de l'application dans le conteneur
COPY . /var/www/html

# Exposer le port 80 pour HTTP
EXPOSE 80

# Activer les extensions nécessaires pour la base de données
RUN docker-php-ext-install pdo_mysql

# Commande pour démarrer Apache au lancement du conteneur
CMD ["apache2-foreground"]
