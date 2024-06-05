<?php
require ('db_connection.php');

define("UPLOAD_IMAGES_AVATAR_PATH", $_SERVER['DOCUMENT_ROOT'].'/uploads/images/avatars/');

function getAllUsers() {
    global $connexion;

    $query = "SELECT * FROM utilisateurs";
    $stmt = $connexion->prepare($query);
    $stmt->execute();
    return $stmt;
}

function getUserByEmail($email) {
    global $connexion;
    //die(var_dump($email));
    $query = "SELECT * FROM utilisateurs WHERE email = :email";
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return $stmt;
}

function addUser($nom, $prenom, $email, $password, $avatar_name, $profil_id){
    global $connexion;
    $query = "INSERT INTO utilisateurs(nom, prenom, email, password, profil_id, avatar) VALUES(?,?,?,?,?,?)";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($nom, $prenom, $email, $password, $profil_id, $avatar_name));
    $stmt->closeCursor();
}