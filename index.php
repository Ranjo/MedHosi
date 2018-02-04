<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>

</head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   
<script src="ie-emulation-modes-warning.js"></script>

<link rel="stylesheet" type="text/css" href="ind.css">   
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<div id="all">
	<div id="padd">
		<div  align="center" >
	<form  method="POST" action="login.php"><br>

		<input type="text" name="idno" placeholder="Doctor Id"><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="submit" class="btn-lg" class="btn-primary" value="Login">

<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php 
    $error='';
    echo $error; 
    ?>
        
    </div>
        </div>
	</form>
    <?php // ?>
    
	</div>
</div>
<footer>
MedHos inc
</footer>
</body>
</html>