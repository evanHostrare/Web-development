<?php 
$fname='';
$lname='';
$gender='';

$fname=$_GET['firstnumber'];
$lname=$_GET['lastnumber'];
$gender=$_GET['gender'];

echo $fname*$lname.'<br>';
if($gender==1){
	echo 'Male';
}else{
	echo 'Female';
}
?>