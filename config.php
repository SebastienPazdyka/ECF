<?php

if (getenv('JAWSDB_URL') !== false) {
$dbparts = parse_url(getenv('JAWSDB_URL'));

$hostname = $dbparts['en1ehf30yom7txe7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
$username = $dbparts['l6p3q4ibozdrkm9t'];
$password = $dbparts['e0ht6bbarxoywqwf'];
$database = ltrim($dbparts['hexzjax1wmick597'],'/');
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