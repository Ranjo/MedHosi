<?php
$localhost="localhost";
$root="root";
$password="";
$db="patientrec";
$conn=mysqli_connect($localhost,$root,$password,$db);
/*if($conn==true) {
	echo "Connection Successfull";
}
else{
	echo "Try again";
}*/
$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$othername=$_POST['othername'];
$specialist=$_POST['specialist'];
$department=$_POST['department'];
$password=sha1($_POST['password']);

$result= mysqli_query($conn,"INSERT INTO doctor(firstname,surname,othername,specialist,department,password)VALUES('$firstname','$surname','$othername','$specialist','$department','$password')");
if(!$result){
	echo "could not";

}
else{
	echo "updated";
	//header("location: County.php");
}


?>