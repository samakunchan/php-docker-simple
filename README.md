# Mon PHP docker

## Installation
    
Créer un ficher `.env` à la racine du projet avec les informations du fichier `.env.exemple`
    
    cp .env.exemple .env

Lancer docker

    docker compose up
    ou
    docker composer up -d

Normalement, il y a tout:

- phpmyadmin
- mysql
- le serveur: http://localhost:8500/
- composer

Le volume cible le dossier `/src`.
<br>Il faudra mettre tout la logique dans ce dossier.

## Parcourir le container du projet

    docker exec -it php-server sh

C'est plus simple avec le docker Desktop. Il suffit juste de cliquer sur les boutons.
