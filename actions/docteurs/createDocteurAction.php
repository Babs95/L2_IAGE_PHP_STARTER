<?php
require('../../Database/docteur_db.php');

if (isset($_POST['send'])) {
    if (
        !empty($_POST['nom']) && !empty($_POST['prenom'])
        && !empty($_POST['email']) && !empty($_POST['adresse'])
        && !empty($_POST['tel']) && !empty($_POST['service_id'])
    ) {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $tel = htmlspecialchars($_POST['tel']);
            $service_id = $_POST['service_id'];
            addDocteur($nom, $prenom, $email, $adresse, $tel, $service_id);
            $message = "Le docteur " . $nom . " " . $prenom . " a été enregistrer avec succès!";
            header('Location:docteurs.php?message='.$message);
        } else {
            $errorMessage = "Veuillez saisir un email valide!";
        }

    } else {
        $errorMessage = "Veuillez remplir tous les champs!";
    }
}
