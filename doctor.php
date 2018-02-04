<!DOCTYPE html>
<html>
<head>
  <title> Admin Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="panel.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<body>
<nav class="panel panel-default"> Administrator Dashboard</nav>
<div class="contaner">
	<div id="sidebar">
		<div id="padiv" class="dropdown">Doctors</div>
    	<div id="padiv" class="dropdown">Patients</div>
    	<div id="padiv" class="dropdown">Reports</div>
    
	</div>
	<div id="navsection">
<form method="POST" action="doc.php" autocomplete="off">
	<div >
		<div>
			<div align="center">
             <fieldset><legend>Register Doctor</legend>
			 <table id="centdiv" width="427" border="0">
			  <tr>
			    <td>&nbsp;</td>
			    <td>Doctor</td>
			  </tr>
			  <tr>
			    <td>Id No</td>
			    <td><input type="text" required  placeholder="Id No" name="idno"/></td>
			  </tr>
			  <tr>
			    <td>Firstname</td>
			    <td><input type="text" required  placeholder="First name" name="firstname"/></td>
			  </tr>
			  <tr>
			    <td>Surname</td>
			    <td><input type="text" required  placeholder="Surname" name="surname"/></td>
			  </tr>
			   <tr>
			    <td>Othername</td>
			    <td><input type="text" required  placeholder="Othername" name="Othername"/></td>
			  </tr>
			  <tr>
			    <td>Department</td>
			    <td><input type="text" required  placeholder="Department" name="department"/></td>
			  </tr>
			  <tr>
			    <td>Specialist</td>
			    <td><input type="text" required placeholder="specialist" name="specialist"/></td>
			  </tr>
			  <tr>
			    <td>Email Address</td>
			    <td><input type="text"  placeholder="Email address" name="emailadd"/></td>
			  </tr>
			  <tr>
			    <td>Password</td>
			    <td><input type="password" required placeholder="Password" name="pass"/></td>
			  </tr>
			  <tr>
			    <td>Confirm Password</td>
			    <td><input type="password" required placeholder="Confirm Password" name="conpass"/></td>
			  </tr>
			  <tr>
			    <td>Image</td>
			    <td><input type="file" required name="imgs" value="browse" accept="image/*" /></td>
			  </tr>
			</table>
		</fieldset>
<input type="submit" class="btn-large" value="Register">
			</div>
		</div>
	</div>
	
</form>
	</div>
</div>
</body>
</html>