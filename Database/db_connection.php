<?php

$hote = "127.0.0.1";
$user = "root";
$password = "";

$dbName = "l2_iage_bd";

$dsn = "mysql:host=$hote;dbname=$dbName;charset=utf8";

try{
    $connexion = new PDO($dsn, $user, $password);
    //die("Connexion réussie !");
}catch(PDOException $e) { 
    die("Erreur de connexion à la base de données:". $e->getMessage());
}