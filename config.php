<?php
 {

$host = "x8autxobia7sgh74.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "r332ceqy8890pekr";
$pass = "c5n2l42x4ll5phvi";
$dbname = "anar4g3bxb1ant68";
$conn = new mysqli($host , $user, $pass, $dbname);
mysqli_query($conn , "SET character_set_result=utf8");
if($conn->connect_error){
    die("Database Error : " . $conn->connect_error);}
}