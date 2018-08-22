
<?php 
require '../../config/session.php';
require '../../config/dbconfig.php';
$patientid=$_SESSION["patientid"];

$sql4="SELECT * FROM diagnosis where patientid= '$patientid' ORDER BY datev DESC";
$result4 = mysqli_query($conn,$sql4);
//$generalresult=mysqli_fetch_assoc($result4);


$genquery=mysqli_query($conn,"SELECT * FROM patient where patientid= '$patientid'");
$genresult=mysqli_fetch_assoc($genquery);

if (!$patientid) {
  header("location: ../docboard/docp.php");
}

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
<script src="../../script/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/adminlte.min.js"></script>


<body>

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
        <li><a href="../../config/logoutadmin.php">Logout</a></li>
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
        <a href="../index.php">
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
          <li><a href="../patient/pat.php"><i class="fa fa-circle-o"></i>Add Patient</a></li>
          <li><a href="../patient/viewp.php"><i class="fa fa-circle-o"></i> View Patient</a></li>
          <li><a href="../patient/patR.php"><i class="fa fa-circle-o"></i> Reports</a></li>

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
          <li><a href="../notice/viewn.php"><i class="fa fa-circle-o"></i> View Notieces</a></li>


        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-cog"></i> <span>Settings</span>
          <span class="pull-right-container"> 
          </span>
        </a>
       </li>
    </ul>


  </div>
</nav>
	<div class="w3-main w3-theme-l4 " style="margin-left:300px;margin-top: 70px; ">

		<!-- Header -->
		<header class="w3-container   w3-main  w3-theme-l2" style="padding-top:30px; margin-top: 0px;margin-bottom:5px;">
			<h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
		</header>

		<div class="w3-container">


			<div class="bground " >
				<div class="card card-primary w3-theme-light">
					<div class="card-header  w3-theme-d2"style="padding-top:5px;  ">
						<h3 class="card-title">Diagnosis Form</h3>

					</div>

					<div class="w3-container w3-theme-l1">
						
						<table class="w3-table" style=" font-size: 14px !important; padding-bottom: 10px; ">
							<tr>
								<th width="6%">&nbsp;</th>
								<th width="10%">&nbsp;</th>
								<th width="6%">&nbsp;</th>
								<th width="10%">&nbsp;</th>
							</tr>
							<tr>
								<td><label> Patient Id:</label></td>
								<td><?php echo $patientid; ?></td>
								<td><label>Age:</label> </td>
								<td><?php   echo $genresult['dob']; ?></td>
							</tr>
							<tr>
								<td><label> Name:</label></td>
								<td><?php echo $genresult['surname'] ;echo " "; echo $genresult['firstname']; echo " "; echo $genresult['othername'];   ?></td>
								<td><label> Date:</label></td><td><?php echo date("m.d.Y"); ?></td>
							</tr>
						</table>
					</div>


					<div class="prevhist w3-theme-l3">

						<a onclick="document.getElementById('id01').style.display='block'" onclick="w3_close();" style="width:auto; ">View Previous Medical History</a>

					</div>
					<div id="id01" class="modal" style="width: 100%;z-index:5;">

						<span onclick="document.getElementById('id01').style.display='none'" class="closes" title="Close Page">&times;   
						</span>
						<div class="modal-content">
							<table class="table table-hover table-striped">

								<tr class="success">
									<th>No</th>
									<th>Date</th>
									<th>Final Diagnosis</th>

								</tr>
								<?php
								$no= 1;
								while($row = mysqli_fetch_array($result4)){
									echo '<tr>
									<td>'.$no.'</td>
									<td> '.$row['datev'].'</td>
									<td> '.$row['finaldiagnosis'].' </td>
									</tr>';
									$no++;

								}
								?>
							</table>
						</div>
					</div>

					<div class="sided w3-theme-l4">
						<form method="POST" action="../../config/diagno.php" >
							<div>
								<div class="form-group">

									<legend>Symptoms</legend>
									<textarea class="form-control" required rows="4" name="symptoms"></textarea>

								</div>

								<div class="form-group">
									<legend>Final Diagnosis</legend>
									<textarea class="form-control" required rows="4" name="finaldiagnosis"></textarea>
								</div>
								<div class="form-group">
									<legend>Medicine Prescription</legend>
									<textarea class="form-control" required rows="4" name="medprescription"></textarea>
								</div>
								<div align="center" class="clearfix card-footer">
									<button type="submit" class="savebtn" name="save">Save</button>
									<button type="button" class="closebtn" name="Close">Close</button>
								</div>
							</div> 
						</form>
					</div>

				</div>
				<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
</script>



</div>
</div>

</div>
<div style="margin-left:300px;" >
	<!-- Footer -->
	<footer class="w3-container w3-theme-d4 w3-padding-16 ">
		<h4>MedHos Refferal Hospital</h4>
		<p>Developed by <b>Tony Kiprono</b>
		</p>
	</footer>
</div>
<script>
	var mySidebar = document.getElementById("mySidebar");

	function w3_close() {
		if (mySidebar.style.display === 'block') {
			mySidebar.style.display = 'none';
			overlayBg.style.display = "none";
		} else {
			mySidebar.style.display = 'block';
			overlayBg.style.display = "block";
		}
	}
</script>
</body>
</html>