<?php
require('../../Database/service_db.php');

if(isset($_GET['id']) AND !empty($_GET['id']) AND filter_var($_GET['id'], FILTER_VALIDATE_INT, array('min_range' => 1))) {
    $resulat = getOneService($_GET['id']);

    if($resulat->rowCount() > 0){
        $service = $resulat->fetch();
        deleteService($service['id']);
        $message = "Le service a été supprimée avec succès !";
        header('Location:../../views/services/services.php?message='.$message);
    }else{
        $errorMessage = 'L\'id du service n\'existe pas!';
    }
}else{
    $errorMessage = "L'id du service doit être un entier supérieur ou égale à 1!";
}
