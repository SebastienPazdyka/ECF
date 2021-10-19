<?php

if (getenv('JAWSDB_URL') !== false) {
$dbparts = parse_url(getenv('JAWSDB_URL'));

$hostname = $dbparts['x8autxobia7sgh74.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
$username = $dbparts['r332ceqy8890pekr'];
$password = $dbparts['c5n2l42x4ll5phvi'];
$database = ltrim($dbparts['anar4g3bxb1ant68'],'/');
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