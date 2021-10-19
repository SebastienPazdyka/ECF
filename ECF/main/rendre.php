<?php
    session_start();
    require_once "../config.php";
   

    
    $delete_num = $_GET['id'];
    $sql_delete =  "DELETE FROM emprunt WHERE id = '$delete_num'";
    $query_delete = mysqli_query($conn,$sql_delete);
    $row = mysqli_fetch_assoc($query_delete,MYSQLI_ASSOC);
    if(!$row){
        echo "<script>alert('Livre rendu !')</script>";        
        header("Refresh: 0 , url = ../landing.php");
        exit();

    }
    else{
        echo "<script>alert('Veuillez réessayer')</script>";
        header("Refresh: 0 , url = ../landing.php");
        exit();

    }
    mysqli_close($conn);
?>