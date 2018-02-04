<!DOCTYPE html>
<html>
<head>
  <title> Admin Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="ind.css">
<link rel="stylesheet" type="text/css" href="dpdown.css">
<link rel="stylesheet" type="text/css" href="panel.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<body>
  <script type="text/javascript">function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} </script>
<nav class="panel panel-default"> Administrator Dashboard</nav>
<div class="contaner">
	<div id="sidebar" class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Doctor</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="adddoctor.php">Add Doctor</a>
    <a href="deletedoc.php">Delete Doctor</a>
    <a href="viewdoc.php">View Doctors</a>
  </div>
  <button onclick="myFunction()" class="dropbtn">Doctor</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="adddoctor.php">Add Doctor</a>
    <a href="deletedoc.php">Delete Doctor</a>
    <a href="viewdoc.php">View Doctors</a>
  </div>
      
  <button onclick="myFunction()" class="dropbtn">Doctor</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="adddoctor.php">Add Doctor</a>
    <a href="deletedoc.php">Delete Doctor</a>
    <a href="viewdoc.php">View Doctors</a>
  </div>
    </div>
</div>
	<div id="navsection">
	<fieldset><legend>Sessions</legend>
	<table>
			<tr>
    <th width="77" scope="col">Doctor Id</th>
    <th width="90" scope="col">Name</th>
    <th width="123" scope="col">Department</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
		</table>
	</fieldset>
	</div>
</div>
</body>
</html>