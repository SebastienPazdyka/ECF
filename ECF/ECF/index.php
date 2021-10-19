<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="ecf.css">
            <title>Connexion</title>
        </head>
        <body>

        <!-- LOGO ET MENU DE NAVIGATION -->

        <div class="text-center">
    <img src="LOGO Médiathèque.jpg" class="img-fluid" alt="logo">

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
        <li class="nav-item">
          <a class="nav-link text-white" href="jobconnect.php">Accès employées</a>
        </li>
      </ul>
    </div>
        <h1 class="container">Veuillez vous connecter pour profiter de nos services.</h1>
        <div class="login-form">
            
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 

                <!--FORMULAIRE CONNEXION-->
            
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
           
                <p class="text-center"><a href="inscription.php" class="btn btn-primary text-white">Inscription</a></p>
                <p class="text-center"><a href="accueil.html" class="btn btn-primary text-white">Retour à la page d'accueil</a></p>
            </div>
        <style>
                
                @media screen and (max-width: 440px) {

            .login-form {
                width:100%;
	            }
            }
        
            .container{
                margin: 40px auto;
                margin-bottom: 50px;
            }
          
            .login-form form {
                
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>

         <!--PIED DE PAGE-->

        <footer>
            <p class="copyright">&copy; Copyrights ALL RIGHTS RESERVED PAZDYKA SEBASTIEN.</p>
        </footer>
        
        </body>
</html>