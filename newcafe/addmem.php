<?php
session_start();

include('connection.php');
	
$studentnum=$_POST['studentnum'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$contacts=$_POST['contacts'];
$password=$_POST['password'];
$email=$_POST['email'];

$sql= "INSERT INTO members (studentnum, name, surname, contacts, password,  email) VALUES ('$studentnum', '$name', '$surname', '$contacts', '$password', '$email')";
if(mysql_query($sql)){
header("location: loginindex.php");
}
echo die("could not connect". mysql_error());

mysql_close($con);
?> 