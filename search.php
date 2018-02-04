<?php
require 'dbconfig.php';
$error = "No Result";
$search = $_POST['search'];
$result =mysqli_query($conn,"SELECT firstname, surname from doctor WHERE idno = $search");
/*if (!$result) {
	echo "erronous";
}
echo firstname;*/
/*if (@mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
/*echo "Firstname: " . $row["firstname"]."<br>";
echo "Surname: " .$row["surname"].  "<br>";*/

 /*   }
} else {
echo "$error";
  
}*/

  ?>
  <?php include('session.php'); ?>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="startp.css">
<link rel="stylesheet" type="text/css" href="panel.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<body>
<nav class="fixed-top">
 <ul class="nav nav-pills">
  <li><a href="#">Patient Record System</a></li>
  <li style="float:right"><a href="#">Setting</a></li>
  <li style="float:right"><a href="#">Contact</a></li>
  <li style="float:right"><a href="#">Profile</a></li>
</ul> 
</nav>
<div>
	<div>
		<div id="top" align="center" padding="50px">
						<div align="left">
				
<p class="lead"> 
	<form method="POST" action="search.php">
		<input type="text" required placeholder="Search..." name="search">
		<input type="submit" value='Search' name="Search">
</form>
<div><?php 

echo "$error";
 ?></div>
</p>
			</div>
		</div>
	</div>
</div>
<div id="searchside"><?php
while($row = mysqli_fetch_assoc($result)) {
echo "Firstname: " . $row["firstname"]."<br>";
echo "Surname: " .$row["surname"].  "<br>";

    }
     else {
echo "$error";
  
}

 /*echo "Firstname: " . $row["firstname"]."<br>";
echo "Surname: " .$row["surname"].  "<br>"; */ ?></div>
<footer>
<div class="fixed-bottom" align="center">MedHos inc</div>
</footer>
</body>
</html>



