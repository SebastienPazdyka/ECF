<?php 

/* CONNEXION A LA BASE DE DONNEES */

    session_start();
    require_once 'config.php'; 
  
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }


    $req = $bdd->prepare('SELECT * FROM job WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
    $sql_fetch_todos = "SELECT * FROM emprunt ORDER BY id ASC";
$query = mysqli_query($conn, $sql_fetch_todos);
?>



<!doctype html>
<html lang="fr">
  <head>
    <title>Espace membre</title>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="ecf.css">
  </head>
  <body>

      <!-- FEUILLE DE STYLE -->

    <style>
          @media screen and (max-width: 440px) {
        table,
        tbody,
        tr,{
            display: block;
        }      

        th {
            width:20em;
            }
        }
              
        .container {
            margin: 0px auto;
            margin-bottom: 50px;
            border-radius: 30px;
            text-align: center;
            width: 100%;
            padding-bottom: 10px;
        }

        table th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px 0px 10px 0px;
        }

        table {
            width: 100%;
        }

        th {
            color: white;
            background-color: rgb(248, 140, 210);
        }

        tr {
            background-color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .timeregis {
            text-align: center;
        }
        .form-group{
            max-width:600px ;
	        margin:0 auto;
            width:100%;
        }
        [type=text]{
            font-family: "Mitr", sans-serif;
            border-radius: 15px;
            border: transparent;
            padding: 7px 200px 7px 5px;
        }
        .return{
            border-radius: 15px;
            background-color: #ffcc33;
            color: black;
            text-decoration: none;
            padding: 4px 40px 4px 40px;
            
            font-size: 20px;
            transition: 0.5s;
        }
        .return:hover{
            background-color: #fdb515;
            color: white;
        }
        .modify{
            border-radius: 15px;
            border: transparent;
            color: white;
            padding: 4px 40px 4px 40px;
            margin: 0px 60px 50px 100px;
            font-size: 20px;
            border-collapse: collapse;
            background-color: #00A600;
            font-family: "Mitr", sans-serif;
            transition: 0.5s;
        }
        .modify:hover{
            color: black;
            background-color: #BBFFBB;
        }
    </style>

    <!-- LOGO ET MENU DE NAVIGATION -->

  <div class="text-center">
    <img src="LOGO Médiathèque.jpg" class="img-fluid" alt="logo">

    <ul class="nav justify-content-center navbar">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="accueil.html">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="empruntadmin.php">Emprunts</a>
          </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="landing.php">Profil</a>
          </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="catalogueconnecter.php">Catalogue</a>
        </li>
      </ul>
    </div>
    
              
            
                <div class="container">
        <h1>Liste des emprunts:</h1>
    </div>

        <!--TABLEAU EMPRUNT-->
        
    <div class="table-product">
        <table>
            <tr>
                <th scope="col">Liste</th>
                <th scope="col">Nombre restant</th>
                <th scope="col">Date d'ajout:</th>
            </tr>
            <tbody>
                <?php
                $idpro = 1;
                while ($row = mysqli_fetch_array($query)) { ?>
                    <tr>
               
                        
                        <td class="text-center"><?php echo $row['titreliv'] ?></td>
                        <td class="text-center"><?php echo $row['amount'] ?></td>
                        <td class="timeregis"><?php echo $row['time'] ?></td>
                        
                    </tr>
                <?php
                    $idpro++;
                } ?>
            </tbody>
        </table>
        <br>
        
    </div>
    <?php
    mysqli_close($conn);
    ?>

<div class="form-button text-center">
    <a href="accueil.html" class="btn btn-danger text-white">Déconnexion</a>
</div>

        <!--PIED DE PAGE-->

        <footer>
            <p class="copyright">&copy; Copyrights ALL RIGHTS RESERVED PAZDYKA SEBASTIEN.</p>
        </footer>
  </body>
</html>