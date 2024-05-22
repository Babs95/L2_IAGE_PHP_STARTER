<?php
require('../../Database/user_db.php');

if (isset($_POST['send'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            $check = getUserByEmail($email);

            if($check->rowCount() > 0) {
                $userInfos = $check->fetch();
                if(password_verify($password, $userInfos['password'])) {
                    session_start();
                    $_SESSION['auth'] = true;
                    $_SESSION['nom'] = $userInfos['nom'];
                    $_SESSION['prenom'] = $userInfos['prenom'];
                    $_SESSION['email'] = $userInfos['email'];
                    $_SESSION['profil'] = $userInfos['profil_id'];
                    
                    header('location:../../index.php');
                }else{
                    $errorMessage = "Votre mot de passe est incorrect!";
                }
                
            }else{
                $errorMessage = 'Cet utilisateur n\'existe pas !';
            }
            
        } else {
            $errorMessage = "Veuillez saisir un email valide!";
        }

    } else {
        $errorMessage = "Veuillez remplir tous les champs!";
    }
}