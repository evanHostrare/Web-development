<?php
include('includes/sessionstart.php');
$name='';
$email='';
$password='';

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "dynamicwebsite";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, email, password)
VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    header('Location: http://localhost/dynamicwebsite/login.php');
  } else {
    header('Location: http://localhost/dynamicwebsite/register.php');
  }

$conn->close();

?>