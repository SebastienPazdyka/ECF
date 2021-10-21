
Bonjour, afin de déployer le site de la médiathèque pour l'ECF de STUDI d'octobre 2021 en local ou en ligne veuillez suivre les instructions suivantes :

----------------------------------------------------

DEPLOIEMENT EN LOCAL :

(Il vous faudra un serveur local tel que XAMPP,WAMP ou encore LAMP par exemple selon votre système d'exploitation afin de pouvoir réaliser ce tuto. Travaillant avec Windows 10 ce tutoriel sera baser sur WAMP.)

-------"""ATTENTION""": La base de données est configurer pour fonctionner avec les identifiants Mysql suivants : 

host = localhost;
user = root;
password = Y28IE09ihjdved;
dbname = "mediatheque";

-------

-Tout d'abord il vous faudra installer le serveur local WAMPP sur "https://www.wampserver.com/", veiller à bien installer PHP lors de la configuration de WAMP et le serveur MYSQL.

-Rendez-vous sur "https://github.com/SebastienPazdyka/ECF" pour y récupérer les fichiers nécéssaires. Télécharger le dossier zip et grâce a à 7zipfile par exemple, extrayer les fichiers.

-Après l'extraction, à l'aide de votre explorateur de fichiers accéder au dossier "www", la route d'accés devrait être similaire à celle-ci "C:\wamp64\www". À l'intérieur déposer le dossier "ECF-main" récupérer via mon git "https://github.com/SebastienPazdyka/ECF" que vous venez d'extraire.

-Une fois cela effectuer, 2 méthodes vous sont possible afin de déployer la Base de données du site:

 Première méthode: Démarrer Wamp et accéder à PHPmyadmin, écrivez votre nom de d'utilisateur ainsi que votre mot de passe. Une fois cela fait,créer une nouvelle base de données et appeler la "mediatheque". Ensuite cliquer sur 'IMPORTER' et choissisez le fichier "mediatheque.sql" présent parmis les fichiers que vous avez obtenues sur mon git précédamment. 
 
 Deuxième méthode: À l'aide d'un terminal de commande, écrivez la commande suivante "mysql -u root -p mediatheque < C:\wamp64\www\ECF\mediatheque.sql" il vous faudra ensuite taper votre mot de passe utilisateur et vérifier que tout à bien fonctionner en vous connectant à MYSQL "mysql -u root -p" et en utilisant les scripts SQL suivants "SHOW DATABASES;" pour accéder à vos base de données. Vous devriez voir "mediatheque", si oui, faite "USE mediatheque;" et "SHOW TABLES;" cela vous permettra de voir si vos tables sont elles aussi présentes.
 
Maintenant accéder à votre navigateur web (Chrome pour ma part), et tapez l'adresse suivante dans la barre d'adresse "http://localhost/ECF-main/ECF-main/accueil.html", si vous avez respecter les instructions pécédentes à la lettre vous devriez être sur la page d'accueil du site de la médiathèque !

DEPLOIEMENT EN LIGNE : 

(Il vous faudra au préalable un crée un compte HEROKU et avoir télécharger HEROKU Cli afin de pouvoir déployer l'application en ligne !)

-À l'aide d'un terminal de commande, accéder à votre fichier contenant votre application grâce à " cd  C:\wamp64\www\ECF".

-Une fois cela fait il vous faudra vous connecter à Heroku grâce à "heroku login".

-Une fois connecter, faite un "git init" afin de créer un dépôt git pour votre app.

-Il faudra ensuite effectuer la commande suivante "echo "web: vendor/bin/heroku-php-apach2 public/" > Procfile" ce qui viendra créer un fichier Procfile dans votre dossier (essentiel pour le déploiement!).

-Ensuite faite un "git add ." afin d'insérer les fichiers dans votre dépôt git. Vous pouvez vérifier la réussite de l'opération grâce à "git status" qui vous présentera les fichiers présent.

-Effectuer ensuite un "git commit -m start" afin de procéder au commit.

-Enfin taper "heroku create" afin de créer un domaine comprenant votre site.

    
 -------"""ATTENTION""": si vous rencontrez des problèmes pour déployer vos fichiers, cliquer sur "Deploy" sur votre domaine Heroku et connecter vous à votre github, et lié votre domaine à un dépôt que vous avez créer au préalable du nom de ECF et y déposer les fichiers de l'app dedans. Déployer ensuite la branche "main" sur votre domaine et vous devriez accéder aux site. -------


-Maintenant il faudra intégrer la base de données, grâce à l'addons heroku "JawsDB Mysql". Vous le trouverez grâce à Heroku Element "https://elements.heroku.com/".
Une fois télécharger et lié à votre domaine, rendez-vous dans la section "Setting" de votre domaine, et dans "Config Vars", cliquer sur "Reveal Vars" et vous devriez avoir "JAWSDB_URL" avec à coté votre adresse de la base de données.

-Vous pouvez accéder à votre tableau de bord Jaws en cliquant sur "Ressources" et en cliquant sur le lien "JawsDB" dans les addons. Vous y trouverez le nom de l'host,l'utilisateur,le mot de passe ainsi que le port et le nom de la base de données Jaws.

-À l'aide de votre terminal de commande,connecter vous de nouveau à Mysql et à Heroku, et effectuer la commande suivante "mysql -h NEWHOST -u NEWUSER -pNEWPASS NEWDATABASE <  C:\wamp64\www\ECF\mediatheque.sql" (remplacer les termes par ceux de votre bdd visible sur le tableau de bord Jaws). Cela vous permettra d'insérer les données du fichier mediatheque.sql dans votre bdd Jaws.

-Maintenant vous pouvez accéder à votre domaine et visualiser votre site !

CREATION ADMINISTRATEURS:

-Connecter vous à la base de données via un terminal de commande, et en vous connectant à Mysql : USE mediatheque; - INSERT INTO admin VALUES (id, pseudo, email, password, ip, token), et inscrivez y les informations du nouvel administrateur.

-Essayer la connection localement directement via "http://localhost/ECF/jobconnect.php" Effectuer une mise à jour de votre base de données de votre domaine Heroku, et essayer via "https://still-sea-82800.herokuapp.com/jobconnect.php".

--------------------------------------------------------------------

Voilà pour ce tuto, si vous souhaitez voir le résultat de tout ça, rendez-vous à l'adresse suivante "https://still-sea-82800.herokuapp.com/accueil.html".

Merci à vous et bonne continuation.

