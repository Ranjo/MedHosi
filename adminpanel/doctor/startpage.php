<?php 
include('../../config/session.php');
include('../../config/header.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	
</style>
</head>
<link rel="icon" href="../../Images/icon.ico">  
<link rel="stylesheet" type="text/css" href="../../css/header.css">
<link rel="stylesheet" type="text/css" href="../../css/startp.css">

<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.min.css">
<script src="../../script/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<body class="bodybgs">
  <div >
<nav class="navbar navdiff navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="startpage.php">Patient Record System</a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="startpage.php">Main Page</a></li>
        <li><a href="../patient/addpatients.php">Add Patient</a></li>
        <li><a href="../patient/viewpatient.php">View Patient</a></li>
        <li><a href="#"><?php echo $_SESSION['login_user']?></a></li>
        <li><a href="../../config/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>



		<div>
			<div align="center" class="centered"> 
          <form method="POST" action="../../config/search.php">
            <div>
              
              	<input type="text" required class="reseted" placeholder="Search patient using Patient id" name="search"><br>
            <p>
            <?php

                if (isset($_GET['msg'])) {
                $message = $_GET['msg'];
                if ($message == 1) {
                    echo "<span style ='color: green' fontsize: '50'>successfull</span>";
                    
                }
                if ($message == 2) {
                    echo "<span  style ='color: red'>No user with that id</span>";  
                }
              }
            ?>
            </p>
                <button type="submit" name="Search" class="btn-lg btn-default"><span class="glyphicon glyphicon-search"></span>Search</button>
                  
                            		
            </div>
          </form>
			</div>
		</div>
<?php require '../../config/footer.php';?>
</div>
</body>
</html>

