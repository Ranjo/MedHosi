<?php include('../../config/session.php'); include('../../config/header.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Patient</title>
</head>
	
	<link rel="icon" href="../../Images/addicon.png">  
	<link rel="stylesheet" type="text/css" href="../../css/addp.css">
	<link rel="stylesheet" type="text/css" href="../../css/header.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.min.css">
	<script src="../../script/jquery-1.11.0.min.js"></script>
<body >
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../doctor/startpage.php">Patient Record System</a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../doctor/startpage.php">Main Page</a></li>
        <li class="active"><a href="../patient/addpatients.php">Add Patient</a></li>
        <li><a href="../patient/viewpatient.php">View Patient</a></li>
        <li><a href="#"><?php echo $_SESSION['login_user']?></a></li>
        <li><a href="../../config/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="navsection" align="center">
<form  name="patregform" method="POST" action="../../config/pat.php" autocomplete="on" >
<p><?php

if (isset($_GET['msg'])) {
	$message = $_GET['msg'];
	if ($message == 1) {
		echo "<span style ='color: green' fontsize: '50'>successfull</span>";
		
	}
	if ($message == 2) {
	echo "<span  style ='color: red'>Could not add patient</span>";	
	}
}
?></p>
			  
			 
	<div id="borderddiv">
				
<fieldset><legend><b>Personal info</b></legend>					
					<div class="form-group col-xs-4">
					<label for="patientid">Patient Id:</label>
					<input type="text" class="form-control"  name="patid">
					</div>
				
					<div class="form-group col-xs-4">
				    <label for="dob">Date of Birth:</label>
				    <input type="Date" class="form-control" required  placeholder="Date of Birth" autofocus name="dob"/>
					</div>
					<div class="form-group col-xs-4"> 
				    <label for="idno">Id No</label>:
				    <input type="text" class="form-control"  required  placeholder="Id No" autofocus name="idno"/>
				  	</div>
					<div class="form-group col-xs-4">  
				    <label for="firstname">Firstname:</label>
				    <input type="text" required class="form-control" placeholder="First name" name="firstname"/>
					</div>
					<div class="form-group col-xs-4">
				    <label for="surname">Surname:</label>
				    <input type="text" required class="form-control" placeholder="Surname" name="surname"/>
					</div>
					<div class="form-group col-xs-4">   
				    <label for="">Othername:</label>
				    <input type="text"  class="form-control" placeholder="Othername" name="othername"/>
					</div>
				</fieldset>
					<fieldset><legend><b>Contact Details</b></legend>
			  		<div class="form-group col-xs-4">	
					<label for="phoneno">Phone Number:</label>
					<input type="text" class="form-control" required placeholder="Phone Number" name="phoneno"><br>
					</div>
					<div class="form-group col-xs-4">
			    	<label for="emailadd">Email Address</label>
			   	 	<input type="email" class="form-control" placeholder="Email address" name="emailadd"/><br>
			  		</div>
					<div class="form-group col-xs-4">
					<label for="homeadd">Home Address:</label>
					<input type="text" class="form-control " required placeholder="Home address" name="address"><br>
					</div>
				</fieldset>
				<fieldset><legend><b>Medical Details</b></legend>
			  		<div class="form-group col-xs-4">	
					<label for="bloodtype">Blood group:</label>
					<input type="text" class="form-control" required placeholder="Blood Group" name="bloodgroup"><br>
					</div>
					<div class="form-group col-xs-4">
			    	<label for="bloodp">Blood pressure:</label>
			   	 	<input type="email" class="form-control" placeholder="Blood Pressure" name="bp"/><br>
			  		</div>
					<div class="form-group col-xs-4">
					<label for="condition">Current Condition:</label>
					<input type="text" class="form-control " required placeholder="Current Condition" name="ccondition"><br>
					</div>
				</fieldset>
			
	</div>	
			  
			

<input type="submit" id="padiv" class="btn-large" value="Register">

	
</form>
	</div>
	<footer>
<div class="navbar-fixed-bottom" align="center">MedHos inc</div>
</footer>
</body>
</html>