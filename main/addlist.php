<?php
    session_start();
    require_once "../config.php";
   

    if($_POST['titreliv'] != null && $_POST['amount'] != null  && $_POST['id'] != null  ){
        $sql = "INSERT INTO livre (titreliv,amount,id) VALUES ('". trim($_POST['titreliv']). "','". trim($_POST['amount']). "','". trim($_POST['id']). "')";
        if($conn->query($sql)){
            echo "<script>alert('Ajout réussi !')</script>";
            header("Refresh:0 , url = ../list.php");
            exit();

        }
        else{
            echo "<script>alert('Erreur survenue')</script>";
            header("Refresh:0 , url = ../list.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Veuillez renseigner les informations.')</script>";
        header("Refresh:0 , url = ../list.php");
        exit();

    }
    mysqli_close($conn);
?>