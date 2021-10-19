<?php

if (getenv('JAWSDB_URL') !== false) {
$dbparts = parse_url(getenv('JAWSDB_URL'));

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');
} else {

$host = "localhost";
$user = "root";
$pass = "Y28IE09ihjdved";
$dbname = "mediatheque";
$conn = new mysqli($host , $user, $pass, $dbname);
mysqli_query($conn , "SET character_set_result=utf8");
if($conn->connect_error){
    die("Database Error : " . $conn->connect_error);}
}