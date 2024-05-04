<?php
require ('db_connection.php');

function getUserByEmail($email) {
    global $connexion;
    //die(var_dump($email));
    $query = "SELECT * FROM utilisateurs WHERE email = :email";
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return $stmt;
}