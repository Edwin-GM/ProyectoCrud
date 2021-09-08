<?php

$Servername = "localhost";
$db = "crud"; 
$username = "root";
$password = "";

try {
    $dsn = "mysql:host=$Servername; dbname=$db";

    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*     echo  "Conexion Realizada"; */
} catch (Exception $e){

    die ('Error: '.$e->getMessage());
    exit;
}
return $conn;
?>