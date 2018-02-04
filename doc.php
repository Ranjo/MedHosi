<?php
require 'dbconfig.php';
$idno=$_POST['idno'];
$hospitalid=$_POST['hosid'];
$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$othername=$_POST['othername'];
$phoneno=$_POST['phoneno'];
$emailadd=$_POST['emailadd'];
$homeadd=$_POST['address'];
$password=$_POST['password'];



$result=mysqli_query($conn,"INSERT INTO doctor(nationalid, surname, firstname, othername, hospitalid, phoneno, emailaddress, address, password) VALUES('$idno', '$surname', '$firstname', '$othername', '$hospitalid', '$phoneno', '$emailadd', '$homeadd', '$password')");
if(!$result){
	echo "not happening";
}
else{
	echo "updated";
	header("location: adddoctor.php");
}
?>