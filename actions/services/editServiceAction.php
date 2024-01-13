<?php
require('../../Database/service_db.php');

if(isset($_GET['id']) AND !empty($_GET['id']) AND filter_var($_GET['id'], FILTER_VALIDATE_INT, array('min_range' => 1))) {
    $resulat = getOneService($_GET['id']);

    if($resulat->rowCount() > 0){
        $service = $resulat->fetch();
        $libelle = $service['libelle'];
    }else{
        $errorMessage = 'L\'id du service n\'existe pas!';
    }
}else{
    $errorMessage = "L'id du service doit être un entier supérieur ou égale à 1!";
}

if(isset($_POST['envoyer'])){
    if(!empty($_POST['libelle'])){
        extract($_POST);
        updateService($service['id'], $libelle);
        $message = "Le service a été modifié avec succès !";
        header('Location:services.php?message='.$message);
    }else{
        $errorMessage = 'Le libellle est obligatoire!';
    }
}