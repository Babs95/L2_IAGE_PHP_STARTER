<?php
require('../../Database/service_db.php');

if(isset($_POST['envoyer'])){
    if(!empty($_POST['libelle'])){
        extract($_POST);
        addService($libelle);
        $message = "Le service a été ajouté avec succès !";
        header('Location:services.php?message='.$message);
    }else{
        $errorMessage = 'Le libellle est obligatoire!';
    }
}