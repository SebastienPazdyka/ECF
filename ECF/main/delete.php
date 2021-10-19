<?php
    session_start();
    require_once "../config.php";
   

    
    $delete_num = $_GET['id'];
    $sql_delete =  "DELETE FROM livre WHERE id = '$delete_num'";
    $query_delete = mysqli_query($conn,$sql_delete);
    $row = mysqli_fetch_assoc($query_delete,MYSQLI_ASSOC);
    if(!$row){
        echo "<script>alert('Suppression réussi !')</script>";        
        header("Refresh: 0 , url = ../list.php");
        exit();

    }
    else{
        echo "<script>alert('Erreur lors de la suppression')</script>";
        header("Refresh: 0 , url = ../list.php");
        exit();

    }
    mysqli_close($conn);
?>