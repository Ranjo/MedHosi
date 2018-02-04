<!DOCTYPE html>
<html>
<head>
  <title> Admin Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="ind.css">
<link rel="stylesheet" type="text/css" href="panel.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<body>
	<?php session_start(); ?>
	<script type="text/javascript">

        $(document).ready(function(){

            $(".slide-toggle").click(function(){

                $(".box").slideToggle();

            });

        });

    </script>
<div class="contaner">
	<div id="sidebar">
		<div id="padiv" class="dropdown">
			<a href="#">Doctors</a> 
		</div>
		<div>
    	<button type="button" class="slide-toggle">Patient</button>

        <div class="box">

            <div class="box-inner"><a href="#">Add Patient</a></div>
            <div class="box-inner"><a href="#">View padtient</a></div>
        </div>
    </div>
    	<button type="button" class="slide-toggle">Reports</button>
    <div class="box">

            <div class="box-inner"><a href="#">Add Patient</a></div>
            <div class="box-inner"><a href="#">View padtient</a></div>
        </div>
	</div>
	<div id="navsection">
<form method="POST" action="doc.php" autocomplete="on">
	<div >
		<div>
			<div align="left">
             <fieldset><strong>Register Doctor</strong>
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
			<td>Doctor Id</td>
			<td><input type=""  name="docid"></td>
			</tr>
			<tr>
			<td>Hospital Id</td>
			<td><input type="text" required name="hosid"></td>
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
			    <td><input type="text" required  placeholder="Othername" name="othername"/></td>
			  </tr>

			  <tr>
			<td>Phone Number</td>
			<td><input type="text" required placeholder="Phone Number" name="phoneno"></td>
			</tr>
			  <tr>
			    <td>Email Address</td>
			    <td><input type="text"  placeholder="Email address" name="emailadd"/></td>
			  </tr>
			<tr>
			<td>Home Address</td>
			<td><input type="text" required placeholder="Home address" name="address"></td>

			</tr>
	
			<tr>
			    <td>Password</td>
			    <td><input type="password" required placeholder="Password" name="password"/></td>
			  </tr>
			  <tr>
			    <td>Confirm Password</td>
			    <td><input type="password" required placeholder="Confirm Password" name="conpass"/></td>
			  </tr>
			  
			</table>

<input type="submit" id="padiv" class="btn-large" value="Register">
</fieldset>
			</div>
		</div>
	</div>
	
</form>
	</div>
</div>
</body>
</html>