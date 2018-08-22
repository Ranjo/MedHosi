<?php
//session_start();
include '../../config/session.php';
include '../../config/dbconfig.php';
@$search = $_POST['searchp'];
$genquery =mysqli_query($conn,"SELECT * from patient WHERE patientid = '$search'");
$genresult=mysqli_fetch_assoc($genquery);


?>

<!DOCTYPE html>
<html>
<head>
	<title>StartPage</title>
</head>
<link rel="stylesheet" type="text/css" href="../../css/admincss/AdminLTE.min.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/admincss/skins/_all-skins.min.css">
<link rel="stylesheet" type="text/css" href="../../css/header.css">
<link rel="stylesheet" type="text/css" href="../../css/w3/w3.css">
<link rel="stylesheet" href="../../css/doc.css">
<link rel="stylesheet" href="../../css/maincss.css">
<script src="../../script/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/adminlte.min.js"></script>


<body class="w3-theme-l4">
  <div class="w3-top " style="margin-left: 300px; width:79% ">
    <div class="medhos top">

      MedHos Referral Hospital
      <span class="plus">+</span>
      <div class="top w3-right w3-small-hide  w3-wide" style="font-size: 14px; margin-top: 10px;">Providing Better healthcare</div>

    </div>
    <div class="w3-bar w3-text-white w3-large" style="z-index:4; width: 99%; background-color: #1e2226; opacity: 1;">
      <span class="w3-left ">Welcome, <strong><?php echo $_SESSION['login_user']?></strong></span>
      <div class="w3-right">
     <i class="fa fa-user-circle fa-1x w3-bar-item  dropdown-toggle" data-toggle="dropdown" style="font-size: 25px;"></i>
      <ul class="dropdown-menu"style="right: 0; left: auto;">
        <li><a href="../../config/logout.php">Logout</a></li>
         <li><a href="#">change password</a></li>
      </ul>
  </div>
    </div>  

  </div>
<nav class="w3-sidebar sidebar skin-black w3-theme-l4s " id="linkhov" style="z-index:3;width:300px; color: white; font-size: 14px; background-color: #1a2226;">
     <div style="height:  115px; background-color: #1a2226; font-family: sans-serif; " class="w3-text-white">
    <div class="w3-container w3-padding "style="border-bottom:  1px solid white;">
    <h7 class="w3-left w3-wide "  >Doctor</h7><br>
    <h7 class="w3-right w3-wide " style="padding-bottom: 10px;">Dashboard</h7>
</div>
   <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION<hr></li>
      <li>
            <a href="index.php">
              <i class="fa fa-info-circle" style="font-size: 18px;"></i> <span>Overview</span>
              <span class="pull-right-container"> 
              </span>
            </a>
          </li>
          <li class="active">
            <a href="docp.php">
              <i class="fa fa-pencil-square-o" style="font-size: 18px;"></i> <span>Treat Patient</span>
              <span class="pull-right-container"> 
              </span>
            </a>
          </li>
          <li>
            <a href="pat.php">
              <i class="fa fa-user-plus" style="font-size: 18px;"></i> <span>Add Patient</span>
              <span class="pull-right-container"> 
              </span>
            </a>
          </li>
          
          <li>
            <a href="viewp.php">
              <i class="fa fa-eye" style="font-size: 18px;"></i> <span>View Patient</span>
              <span class="pull-right-container"> 
              </span>
            </a>
          </li>
          
          <li>
            <a href="../notice/viewn.php">
              <i class="fa fa-bell-o" style="font-size: 18px;"></i> <span>View Notices</span>
              <span class="pull-right-container"> 
              </span>
            </a>
          </li>
      <!-- <li>
        <a href="index.php">
          <i class="fa fa-users w3-text-orange"></i> <span>Overview</span>
          <span class="pull-right-container"> 
          </span>
        </a>
       </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i> <span>Patient</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pat.php"><i class="fa fa-circle-o"></i>Add Patient</a></li>
          <li><a href="viewp.php"><i class="fa fa-circle-o"></i> View Patient</a></li>
          <li><a href="patR.php"><i class="fa fa-circle-o"></i> Reports</a></li>

        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Notices</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="viewn.php"><i class="fa fa-circle-o"></i> View Notices</a></li>


        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-cog"></i> <span>Settings</span>
          <span class="pull-right-container"> 
          </span>
        </a>
       </li> -->
    </ul>


  </div>
</nav>
	<div class="w3-main w3-theme-l4 " style="margin-left:300px;margin-top: 109px; ">

		<!-- Header -->
		<header class="w3-container   w3-main  w3-theme-l2" style="padding-top:5px;margin-bottom: 3px;">
			<h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
		</header>
		<div class="w3-container " >
			<div class="card card-primary w3-theme-light">
				<div class="card-header  w3-theme-d2"style="padding-top:5px">
					<h3 class="card-title">Search Patient</h3>
				</div>
				<form method="POST">
					
					<div class="w3-container w3-center">
						<div class="">
							<input type="text" name="searchp">
						</div>
						<div class="">
							<button class="w3-button w3-theme-d1" name="searchpb"><i class="fa fa-search w3-text-orange"></i>Search</button>
						</div>

					</div>
				</form>
				<div class="panel panel-default" style="margin-top: 10px;">
					<div class="w3-container panel-header" style=" background-color: #F0E68C;">
						<h3>Search Results</h3>
					</div>
          
           <div class=" w3-container panel-body card-footer  " style="height: 150px;margin-bottom: 5px;" id="linkhovs">

           
              <?php
              if (!$genresult) {?>
                <div class="alert alert-danger  w3-margin-top"><?php
                echo "No user with such id";
                ?></div><?php
              }else{
                ?>
                
                <div style="width: 100%;"  class="w3-bar-item alert alert-success w3-margin-top ">
                  <a href="diag.php"  style="width: 100%; height: 100%; display: block; text-decoration: none;">
                    <?php
                    echo $genresult['surname'] ;echo " "; echo $genresult['firstname']; echo " "; echo $genresult['othername'];echo "</a>";

                    $_SESSION["patientid"]="$search";
                    ?>  
                  </a>
                </div>
                <?php
              }
              ?>

            </div>

        </div>
      </div>
    </div>
  </div>

	<div style="margin-left:300px;" >
		<!-- Footer -->
		<footer class="w3-container w3-theme-d4 w3-padding-16 w3-bottom">
			<h4>MedHos Refferal Hospital</h4>
			<p>Developed by <b>Tony Kiprono</b>
			</p>
		</footer>
	</div>
</body>
</html>
<style type="text/css">
input[name=searchp]{
	line-height: 1.8;
	color: #555;
	background-color: #fff;
	font-size: 18px;
	width: 50%;
	height: 50px;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #00a3cc;
	box-sizing: border-box;
}
button[name=searchpb]{
border-radius: 4px;

}


</style>
