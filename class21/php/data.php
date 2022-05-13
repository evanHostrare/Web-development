<?php 
$email='';
$password='';

$email=$_POST['email'];
$password=$_POST['password'];
include('./php/sessionstart.php');

$_SESSION["emailaddress"]= $email;
$_SESSION["password"]= $password;

?>
<a href="one.php">Message</a>