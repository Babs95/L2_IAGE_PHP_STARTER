<?php
session_start();
if(!isset($_SESSION['auth']) && !$login){
    header('location:../../views/auth/login.php');
}