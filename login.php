<?php
require 'dbconfig.php';
session_start();
$error='';
$idno = $_POST['idno'];
$password = $_POST['password'];
$result = mysqli_query($conn,"SELECT * FROM doctor WHERE idno == $doctorid AND password = $password");
if(!$result){
	header("location: index.php");
	$error = "Username or Password is invalid";
}
else{
    $_SESSION['login_user'] = $idno;
	header("location: startpage.php");
}
?>