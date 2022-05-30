<?php
$server="localhost";
$user="root";
$pass= '';
$database= "realyachtrental";

$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("Conexión fallida");
}

?>