<?php
session_start();
$_SESSION = [];
session_destroy();
header('location:../../views/auth/login.php');