<?php
include '../../config/session.php';
include '../../config/dbconfig.php';
$query2 = mysqli_query($conn,"SELECT count(patientid) From patient");
	$result2 = mysqli_fetch_assoc($query2);
$query = mysqli_query($conn,"SELECT count(patientid) From diagnosis");
	$result = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="../../css/admincss/AdminLTE.min.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/admincss/skins/_all-skins.min.css">
<link rel="stylesheet" type="text/css" href="../../css/header.css">
<link rel="stylesheet" type="text/css" href="../../css/w3/w3.css">
<link rel="stylesheet" href="../../css/doc.css">
<link rel="stylesheet" href="../../css/diagnosis.css">
<link rel="stylesheet" href="../../css/maincss.css">
<script src="../../script/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/adminlte.min.js"></script>

<body>

	<body class="skin-black">
		<div class="w3-top " style="margin-left: 300px; width:79% ">
			<div class="medhos top">

				MedHos Referral Hospital
				<span class="plus">+</span>
				<div class="top w3-right w3-small-hide  w3-wide" style="font-size: 14px; margin-top: 10px;">Providing Better healthcare</div>

			</div>
			<div class="w3-bar w3-text-white w3-large" style="z-index:4; width: 99%; background-color: #1e2226; opacity: 1;">
				<span class="w3-left ">Welcome, <strong><?php echo $_SESSION['login_user']?></strong></span>
				<divs class="w3-right">
					<i class="fa fa-user-circle fa-1x w3-bar-item  dropdown-toggle" data-toggle="dropdown" style="font-size: 25px;"></i>
					<ul class="dropdown-menu"style="right: 0; left: auto;">
						<li><a href="../../config/logout.php">Logout</a></li>
						<li><a href="#">change password</a></li>
						<li><a href="#">change password</a></li>
						<li><a href="#">change password</a></li>
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
					<li class="active">
						<a href="index.php">
							<i class="fa fa-info-circle" style="font-size: 18px;"></i> <span>Overview</span>
							<span class="pull-right-container"> 
							</span>
						</a>
					</li>
					<li>
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



<!-- 					<li class="treeview">
						<a href="#">
							<i class="fa fa-user"></i> <span>Patient</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href=""><i class="fa fa-circle-o"></i></a></li>
							<li><a href="viewp.php"><i class="fa fa-circle-o"></i> </a></li>
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
							<li><a href="../notice/viewn.php"><i class="fa fa-circle-o"></i> </a></li>


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
		<div class="w3-main skin-black " style="margin-left:300px;margin-top: 109px;  ">

			<!-- Header -->
			<header class="w3-container   w3-main  w3-theme-l2 w3-sticky" style="padding-top:5px; margin-bottom: 3px; ">
				<h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
			</header>
			
			
			
<div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $result2['count(patientid)']; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4> Total Patient Added</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $result['count(patientid)']; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Patients Treated</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Patient Checked in</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>
  <div>
  	<?php echo date("d  D.M.Y"); echo "     ";

  	 ?>

  </div>


		</div>
		<div class="w3-bottom" style="margin-left:300px; margin-top: 10px; " >
			<!-- Footer -->
			<footer class="w3-container w3-theme-d4 w3-padding-16 ">
				<h4>MedHos Refferal Hospital</h4>
				<p>Developed by <b>Tony Kiprono</b>
				</p>
			</footer>
		</div>
	</body>
	</html>