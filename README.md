# ECF

## Installation et configuration

Tout d'abord, vous devrez clone ce repo sur votre hébergeur web.
Vous devrez ensuite modifier le fichier à la racine .env en modifiant la ligne DATABASE_URL et en y ajoutant les identifiants de votre base de données.
Par la suite vous n'avez qu'à appliquer la migration via la commande "php bin/console doctrine:migrations:migrate"
Et afin de créer un compte administrateur vous pouvez charger la fixture mise à disposition via la commande "php bin/console doctrine:fixtures:load"
Les identifiants administrateur seront :
 - Email : admin@test.com
 - Mot de passe : root

Vous pouvez tester le site sur https://ecf.devbyalex.fr

Voila, le site est prêt à être utilisé !
