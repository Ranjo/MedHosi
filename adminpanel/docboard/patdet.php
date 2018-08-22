<?php
include '../../config/dbconfig.php';
$pid=intval($_GET['id']);
$genquery =mysqli_query($conn,"SELECT * from patient WHERE patientid = '$pid' ");
$genresult=mysqli_fetch_assoc($genquery);
$sql4="SELECT * FROM diagnosis where patientid= '$pid' ORDER BY datev DESC";
$result4 = mysqli_query($conn,$sql4);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Details</title>
</head>
<link rel="stylesheet" type="text/css" href="../../css/admincss/AdminLTE.min.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/admincss/skins/_all-skins.min.css">
<link rel="stylesheet" type="text/css" href="../../css/header.css">
<link rel="stylesheet" type="text/css" href="../../css/w3/w3.css">

<script src="../../script/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/adminlte.min.js"></script>

<body>
	<div class="medhos top" style="border-bottom: 2px solid black;">

		MedHos Referral Hospital
		<span class="plus">+</span>
		<div class="top w3-right w3-small-hide  w3-wide" style="font-size: 14px; margin-top: 10px;">Providing Better healthcare</div>

	</div>
	<div style="padding-top: 10px; font-size: 18px; margin-left: 5px;">		
		<strong>Personal Details</strong>
	</div>
	<div class="row w3-border" >
		<div class="col-sm-2">
			<label class="w3-padding">Patient Id </label><?php echo $genresult['patientid'];?><br>
		</div>
		<div class="col-sm-2">
			<label class="w3-padding">Id Number </label><?php echo $genresult['nationalid'];?>
		</div>
		<div class="col-sm-2">
			<label class="w3-padding">Gender </label><?php echo $genresult['gender'];?>

		</div>
		<div class="col-sm-3">
			<label class="w3-padding">Names:</label><?php  echo $genresult['surname'] ;echo " "; echo $genresult['firstname']; echo " "; echo $genresult['othername'];?><br>
		</div>
		<div class="col-sm-3">
			<label class="w3-padding"> Date of Birth</label><?php echo $genresult['dob'];?><br>
		</div>


	</div>
	<div style="padding-top: 10px; font-size: 18px; margin-left: 5px;">
		<strong>Contact Details</strong>
	</div>
	<div class="row w3-border" ">

		<div class="col-sm-3">
			<label class="w3-padding">Phone Number </label><?php echo $genresult['phone'];?><br>
		</div>
		<div class="col-sm-3">
			<label class="w3-padding">Email Address </label><?php echo $genresult['nationalid'];?>
		</div>
		<div class="col-sm-3">
			<label class="w3-padding">Home Address </label><?php  echo $genresult['address'] ;?>
		</div>



	</div>	
	
	
	<div class="w3-padding">
		<table class="table table-hover table-striped">

			<tr class="success">
				<th>Diagnosis No</th>
				<th>Date</th>
				<th>Hospitalname</th>
				<th>Final Diagnosis</th>
				<th>Treated By</th>

			</tr>
			<?php

			while($row = mysqli_fetch_array($result4)){
				echo '<tr>

				<td>'.$row['diagno'].'</td>
				<td> '.$row['datev'].'</td>
				<td> '.$row['hospitalname'].'</td>
				<td> '.$row['finaldiagnosis'].' </td>
				<td> '.$row['treatedby'].' </td>
				</tr>';


			}
			?>
		</table>
	</div>


</body>
</html>