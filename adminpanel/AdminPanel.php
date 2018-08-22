<!DOCTYPE html>
<html>
<head>
  <title> Admin Panel</title>
</head>

<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/panel.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../script/jquery-1.11.0.min.js"></script>

<body>
  <?php require '../config/header.php';?>
  <div class="panel panel-heading panel-primary">Administrator Dashboard</div>
    <div class="contaner panel-body">
    	<div id="sidebar" class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Doctor</button>
       <div id="myDropdown" class="dropdown-content">
        <a href="doctor/adddoctor.php">Add Doctor</a>
        <a href="deletedoc.php">Delete Doctor</a>
        <a href="viewdoc.php">View Doctors</a>
      </div>
    </div>
  </div>

</body>
</html>