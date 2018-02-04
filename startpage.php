<?php include('session.php'); ?>
<!DOCTYPE html>
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
		<div align="center" padding="50px">
			<img  src="LogoHs.png" class="rounded">
			<div align="center">
				
<p class="lead"> 
	<form method="POST" action="search.php">
		<input type="text" required placeholder="Search..." name="search"><br>
		<input type="submit" value='Search' name="Search">
</form>
</p>
			</div>
		</div>
	</div>
</div>
<footer>
<div class="fixed-bottom" align="center">MedHos inc</div>
</footer>
</body>
</html>

