<?php

require('./Database/service_db.php');

if (isset($_GET['search']) AND !empty($_GET['search'])){
    $word = $_GET['search'];
    $searchResults = searchServiceByWord($word);

}else{
    $messageErreur = 'Veuillez saisir le service à rechercher!';
    $searchResults = null;
}