<?php
require('../../Database/user_db.php');

if (isset($_POST['send'])) {
    if (
        !empty($_POST['nom']) && !empty($_POST['prenom'])
        && !empty($_POST['email']) &&  !empty($_POST['profil_id'])
    ) {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $profil_id = $_POST['profil_id'];
            $password = password_hash("passer@#563", PASSWORD_DEFAULT);

            addUser($nom, $prenom, $email, $password, $profil_id);
            $message = "L'utilisateur " . $nom . " " . $prenom . " a été créer avec succès!";
            header('Location:users.php?message='.$message);
        } else {
            $errorMessage = "Veuillez saisir un email valide!";
        }

    } else {
        $errorMessage = "Veuillez remplir tous les champs!";
    }
}
