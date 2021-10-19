<?php
session_start();
require_once "config.php";


$sql_fetch_todos = "SELECT * FROM livre ORDER BY id ASC";
$query = mysqli_query($conn, $sql_fetch_todos);

?>
<!doctype html>
<html lang="fr">

<head>
    <title>Ajouter livre</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="ecf.css">

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
        .res {
            display:none;
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
            margin:0 auto;
            width:100%;
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
            font-family: "Mitr", sans-serif;
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
            margin: 0px 50px 50px 50px;
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
    
<div class="text-center">
    <img src="LOGO Médiathèque.jpg" class="img-fluid" alt="logo">

    <div class="navi">
    <ul class="nav justify-content-center navbar">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="accueil.html">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="emprunt.php">Emprunts</a>
          </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="list.php">Panel</a>
          </li>
       
      </ul>
    </div>

    <div class="container">
        <h1>Liste des produits:</h1>
        
    </div>
    <div class="table-product">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th class="res" scope="col">Ordre</th>
                <th scope="col">Id produit</th>
                <th scope="col">Liste</th>
                <th scope="col">Nombre restant</th>
                <th class="res" scope="col">Date d'ajout :</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $idpro = 1;
                while ($row = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td class="res" scope="row"><?php echo $idpro ?></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['titreliv'] ?></td>
                        <td><?php echo $row['amount'] ?></td>
                        <td class="timeregis res"><?php echo $row['time'] ?></td>
                    </tr>
                <?php
                    $idpro++;
                } ?>
            </tbody>
        </table>
        <br>
        <div class="addproduct">
            <form method="POST" action="main/addlist.php">
                <div class="form-group text-white">
                    <label for="exampleInputEmail1">Nom du produit : </label>
                    <br>
                    <input type="text" class="form-control" name="titreliv" required>
                </div>
                <div class="form-group text-white">
                    <label for="exampleInputPassword1">Nombre : </label>
                    <br>
                    <input type="number" class="form-control" name="amount" required> </div>
                    <div class="form-group text-white">
                    <label for="exampleInputEmail1">ID du produit : </label>
                    <br>
                    <input type="text" class="form-control" name="id" required>
                </div> <br>
                <div class="form-button">
                    <button type="submit" class="modify" style="float:right">Ajouter produit</button>
                    <a name="" id="" class="return" href="list.php" role="button" style="float:left">Retour</a>
                </div>
            </form>
        </div>
    </div>
    <?php
    mysqli_close($conn);
    ?>

<div class="form-button">
    <a href="accueil.html" class="btn btn-danger text-white">Déconnexion</a>
</div>

        <footer>
            <p class="copyright">&copy; Copyrights ALL RIGHTS RESERVED PAZDYKA SEBASTIEN.</p>
        </footer>
</body>

</html>