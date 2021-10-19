<?php
session_start();
require_once "config.php";

if(!isset($_SESSION['user'])){
    header('Location:index.php');
    die();
}


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

    
    <style>
       
       @media screen and (max-width: 440px) {

        table,
        tbody,
        tr,
        {
            display: block;
        }

        th {
            width:20em;
        }
        .res {
            display: none;
         }
        }
        
        .container {
            margin: 90px auto;
            margin-bottom: 50px;
            border-radius: 30px;
            text-align: center;
            
            width: 40%;
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
       
        .timeregis {
            text-align: center;
        }
        .modify {
            text-align: center;
        }
        .delete {
            text-align: center;
        }
        .modify .bfix {
            border-radius: 15px;
            background-color: #ffcc33;
            color: black;
            text-decoration: none;
            padding: 4px 20px 4px 20px;
            transition: 0.5s;
        }
        .modify .bfix:hover {
            background-color: #fdb515;
            color: white;
        }
        .delete .bdelete {
            border-radius: 15px;
            background-color: #e60000;
            text-decoration: none;
            color: white;
            padding: 4px 20px 4px 20px;
            transition: 0.5s;
        }
        .delete .bdelete:hover {
            background-color: #D9ddd4;
            color: red;
        }
        .Addlist {
            margin-right: 100px;
            padding: 5px 30px 5px 30px;
            border-radius: 15px;
            text-decoration: none;
            color: white;
            background-color: #00A600;
            transition: 0.5s;
        }
        .Addlist:hover {
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
            <a class="nav-link text-white" href="landing.php">Profil</a>
          </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="catalogueconnecter.php">Catalogue</a>
        </li>
      </ul>
    </div>
    
    <h2 class="text-white">Bienvenue sur le Panel de la médiathèque de la Chapelle-Curreaux ! </h2>

    <div class="container">
        <h1>Liste des livres:</h1>
    </div>
    <div class="table-product">
        <table>
            <tr>
                <th class="res" scope="col">Ordre</th>
                <th scope="col">Liste</th>
                <th scope="col">Nombre restant</th>
                <th scope="col">Emprunter</th>
            </tr>
            <tbody>
                <?php
                $idpro = 1;
                while ($row = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td class="res"scope="row"><?php echo $idpro ?></td>
                        <td><?php echo $row['titreliv'] ?></td>
                        <td><?php echo $row['amount'] ?></td>
                        <td class="btn bg-info "><a name="edit" id="" class="bfix text-white" style="float:right" href="pret.php?id=<?php echo $row['id'] ?>&message=<?php echo $row['titreliv'] ?>&amount=<?php echo $row['amount']; ?> " role="button">
                                Emprunter
                            </a></td>
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

<div class="form-button">
    <a href="accueil.html" class="btn btn-danger text-white">Déconnexion</a>
</div>

        <footer>
            <p class="copyright">&copy; Copyrights ALL RIGHTS RESERVED PAZDYKA SEBASTIEN.</p>
        </footer>

</body>


</html>