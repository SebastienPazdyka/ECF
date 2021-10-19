<?php

/* CONNEXION A LA BASE DE DONNEES */

require_once "config.php";


$sql_fetch_todos = "SELECT * FROM livre ORDER BY id ASC";
$query = mysqli_query($conn, $sql_fetch_todos);

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Catalogue</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="ecf.css">

    <!-- FEUILLE DE STYLE -->

    <style>

              @media screen and (max-width: 440px) {

        table,
        tbody,
        tr,
        {
            display: block;
        }

        th {
            width:15em;
            }
        }
        .container {
            margin: 40px auto;
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

        .form-group {
            margin-left: 600px;
        }

        [type=text], [type=number] {
            font-family: "Mitr", sans-serif;
            border-radius: 15px;
            border: transparent;
            padding: 7px 200px 7px 5px;
        }

        .return {
            border-radius: 15px;
            background-color: #ffcc33;
            color: black;
            text-decoration: none;
            padding: 4px 40px 4px 40px;
            margin: 0px 0px 50px 100px;
            font-size: 20px;
            transition: 0.5s;

        }

        .return:hover {
            background-color: #fdb515;
            color: white;
        }

        .modify {
            border-radius: 15px;
            border: transparent;
            color: white;
            padding: 4px 40px 4px 40px;
            margin: 0px 50px 50px 100px;
            font-size: 20px;
            border-collapse: collapse;
            background-color: #00A600;
            font-family: "Mitr", sans-serif;
            transition: 0.5s;

        }

        .modify:hover {
            color: black;
            background-color: #BBFFBB;
        }
    </style>
</head>

<body>
    
<!-- LOGO ET MENU DE NAVIGATION -->

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
          <li class="nav-item">
          <a class="nav-link text-white" href="jobconnect.php">Accès employées</a>
        </li>
        </li>
      </ul>
    </div>

    <div class="container">
        <h1>Liste des produits:</h1>
        
        <!--CATALOGUE-->

    </div>
    <div class="table-product">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Ordre</th>
               
                <th scope="col">Liste</th>
                <th scope="col">Nombre restant</th>
               
                </tr>
            </thead>
            <tbody>

            <!--TRAITEMENT DONNEES-->

                <?php
                $idpro = 1;
                while ($row = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td scope="row"><?php echo $idpro ?></td>
                        <td><?php echo $row['titreliv'] ?></td>
                        <td><?php echo $row['amount'] ?></td>
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

        <!--PIED DE PAGE-->

        <footer>
            <p class="copyright">&copy; Copyrights ALL RIGHTS RESERVED PAZDYKA SEBASTIEN.</p>
        </footer>
</body>

</html>