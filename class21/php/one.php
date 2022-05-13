<?php 
$email='';
$password='';

include('./php/sessionstart.php');
$email=$_SESSION["emailaddress"];
$password=$_SESSION["password"];

echo $email.'<br>';
echo $password.'<br>';

?>
<a href="logout.php">Logout</a>