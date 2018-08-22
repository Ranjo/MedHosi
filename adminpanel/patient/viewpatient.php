<?php include('../../config/session.php'); require '../../config/header.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>View Patient</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Tony Kiprono">
    <link rel="icon" href="../../Images/icon.ico">
    <link rel="stylesheet" type="text/css" href="../../css/viewp.css">
    <link rel="stylesheet" type="text/css" href="../../css/header.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.min.css">
    <script src="../../script/jquery-1.11.0.min.js"></script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","../../config/viewp.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<body >
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../doctor/startpage.php">Patient Record System</a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../doctor/startpage.php">Main Page</a></li>
        <li><a href="addpatients.php">Add Patient</a></li>
        <li class="active"><a href="viewpatient.php">View Patient</a></li>
        <li><a href="#"><?php echo $_SESSION['login_user']?></a></li>
        <li><a href="../../config/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="navsection" align="center">
	<form ">
<input onchange="showUser(this.value)" type="text" name="users">

	</form>
<br>
<div id="txtHint">

</div>
</div>

<!--<footer>
<div class="navbar-fixed-bottom" align="center">MedHos inc</div>
</footer>-->
</body>
</html>