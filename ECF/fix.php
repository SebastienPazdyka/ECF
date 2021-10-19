<?php
session_start();
require_once "config.php";



$sql_fetch_todos = "SELECT * FROM livre ORDER BY id ASC";
$query = mysqli_query($conn, $sql_fetch_todos);

?>
<!doctype html>
<html lang="fr">

<head>
    <title>Modifier livre</title>

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
            font-family: "Mitr", sans-serif;
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
        <h1>Modifier les produits</h1>
       
    </div>
    <div class="table-product">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                
               
                <th scope="col">Liste</th>
                <th scope="col">Nombre restant</th>
                <th scope="col">Date d'ajout:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $idpro = 1;
                while ($row = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td><?php echo $row['titreliv'] ?></td>
                        <td><?php echo $row['amount'] ?></td>
                        <td class="timeregis"><?php echo $row['time'] ?></td>
                    </tr>
                <?php
                    $idpro++;
                } ?>
            </tbody>
        </table>
        <br>
    </div>
    <div class="fixproduct">
        <form method="POST" action="main/fix.php">
            <div class="form-group text-white">
                <label for="exampleInputEmail1">Nom du produit : </label>
                <br>
                <input type="text" class="form-control" name="name" value="<?php echo $_GET['message']; ?>" required>
            </div>
            <div class="form-group  text-white">
                <label for="exampleInputPassword1">Nombres d'ajout : </label>
                <br>
                <input type="number" value="<?php echo $_GET['amount'] ?>" class="form-control" name="value" required>
                <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id" />
            </div>
            <br>
            <div class="form-button  text-white">
                <button type="submit" class="modify" style="float:right">Modifier</button>
                <a name="" id="" class="return" href="list.php" role="button" style="float:left">Retour</a>
            </div>
        </form>
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