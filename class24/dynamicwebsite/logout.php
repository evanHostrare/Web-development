<?php
include('includes/sessionstart.php');

$_SESSION["loggedin"] = "0";
header('Location: http://localhost/dynamicwebsite/login.php');
?>