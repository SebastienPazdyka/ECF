<?php
    session_start();
    require_once "../config.php";
   

    if($_POST['titreliv'] != null && $_POST['amount'] != null  && $_POST['id'] != null  ){
        $sql = "INSERT INTO emprunt (titreliv,amount,id) VALUES ('". trim($_POST['titreliv']). "','". trim($_POST['amount']). "','". trim($_POST['id']). "')";
        if($conn->query($sql)){
            echo "<script>alert('Emprunt réussi !')</script>";
            header("Refresh:0 , url = ../landing.php");
            exit();

        }
        else{
            echo "<script>alert('Erreur lors de l'emprunt')</script>";
            header("Refresh:0 , url = ../catalogueconnecter.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Veuillez renseigner les informations.')</script>";
        header("Refresh:0 , url = ../catalogueconnecter.php");
        exit();

    }
    mysqli_close($conn);
?>