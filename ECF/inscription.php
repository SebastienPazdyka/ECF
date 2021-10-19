<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="ecf.css">
            <title>Inscription</title>
        </head>
        <body>

        <style>
           
                @media screen and (min-width: 700px) {
            .login-form {
                width:100%;
	            }
            }
             .container{
                margin: 40px auto;
                margin-bottom: 50px;
            }
          
            
        </style>

        <div class="text-center">
    <img src="LOGO Médiathèque.jpg" class="img-fluid" alt="logo">

    <div class="navi">
    <ul class="nav justify-content-center navbar">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="accueil.html">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="inscription.php">Inscription</a>
          </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Se connecter</a>
          </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="catalogue.php">Catalogue</a>
        </li>
      </ul>
    </div>
    <h1 class="container">Veuillez vous inscrire pour utiliser nos services.</h1>
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>       
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>   
            </form>
        </div>
        <div class="form-button">
    <p class="text-center"><a href="mots_de_passe.html" class="btn btn-primary text-white">Générer un mot de passe</a></p>
    <p class="text-center"><a href="index.php" class="btn btn-primary text-white">Connexion</a></p>
    <p class="text-center"><a href="accueil.html" class="btn btn-primary text-white">Retour à la page d'accueil</a></p>

</div>

        <footer>
            <p class="copyright">&copy; Copyrights ALL RIGHTS RESERVED PAZDYKA SEBASTIEN.</p>
        </footer>

            </body>
            </html>
       

     