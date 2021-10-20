Bonjour, afin de déployer le site de la médiathèque pour l'ECF de STUDI d'octobre 2021 en local ou en ligne veuillez suivre les instructions suivantes :

DEPLOIEMENT EN LOCAL :

(Il vous faudra un serveur local tel que XAMPP,WAMP ou encore LAMP par exemple selon votre système d'exploitation afin de pouvoir réaliser ce tuto. Travaillant avec Windows 10 ce tutoriel sera baser sur WAMP.)

-Tout d'abord il vous faudra installer le serveur local WAMPP sur "https://www.wampserver.com/", veiller à bien installer PHP lors de la configuration de WAMP et le serveur MYSQL.

-Après l'installation, à l'aide de votre explorateur de fichiers accéder au dossier "www", la route d'accés devrait être similaire à celle-ci "C:\wamp64\www". À l'intérieur créer un nouveau dossier (par exemple ECF) et glisser y les fichiers présent sur mon git "https://github.com/SebastienPazdyka/ECF".

-Une fois cela effectuer, 2 méthodes vous sont possible afin de déployer la Base de données du site:

 Première méthode: Démarrer Wamp et accéder à PHPmyadmin, écrivez votre nom de d'utilisateur ainsi que votre mot de passe. Une fois cela fait,créer une nouvelle base de données et appeler la "mediatheque". Ensuite cliquer sur 'IMPORTER' et choissisez le fichier "mediatheque.sql" présent parmis les fichiers que vous avez obtenues sur mon git précédamment. 
 
 Deuxième méthode:  
 

 Maintenant accéder à votre navigateur web (Chrome pour ma part), et tapez l'adresse suivante dans la barre d'adresse "http://localhost/ECF/accueil.html", si vous avez respecter les instructions pécédentes à la lettre vous devriez être sur la page d'accueil du site de la médiathèque !
