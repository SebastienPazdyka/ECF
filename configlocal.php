<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=mediatheque;charset=utf8', 'root', 'Y28IE09ihjdved');
} catch (Exception $e) {
    die('Erreur' . $e->getMessage());
}

$host = "localhost";
$user = "root";
$pass = "Y28IE09ihjdved";
$dbname = "mediatheque";
$conn = new mysqli($host , $user, $pass, $dbname);
mysqli_query($conn , "SET character_set_result=utf8");
if($conn->connect_error){
    die("Database Error : " . $conn->connect_error);
}