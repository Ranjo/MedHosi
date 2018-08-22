<?php 
include '../../config/session.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<link rel="stylesheet" type="text/css" href="../../css/maincss.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
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
          <li>
            <a href="docp.php">
              <i class="fa fa-pencil-square-o" style="font-size: 18px;"></i> <span>Treat Patient</span>
              <span class="pull-right-container"> 
              </span>
            </a>
          </li>
          <li class="active">
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

      <li class="treeview active">
        <a href="#">
          <i class="fa fa-user"></i> <span>Patient</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="pat.php"><i class="fa fa-circle-o"></i>Add Patient</a></li>
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
          <li><a href="viewn.php"><i class="fa fa-circle-o"></i> View Notieces</a></li>


        </ul>
      </li>
 -->
    </ul>


  </div>
</nav>
  <div class="w3-main w3-theme-l4 " style="margin-left:300px;margin-top: 109px; ">

    <!-- Header -->
    <header class="w3-container   w3-main  w3-theme-l2" style="padding-top:5px; margin-bottom:3px;">
      <h5><b><i class="fa fa-dashboard"></i> Dashboard</b></h5>
    </header>

    <div class="w3-container" >
      <div class="card card-primary w3-theme-light">
       <div class="card-header  w3-theme-d2"style="padding-top:5px">
        <h3 class="card-title">Add Patient</h3>
      </div>
      <div class="w3-container">
        <?php

        if (isset($_GET['msg'])) {
          $message = $_GET['msg'];
          if ($message == 1) {
            ?>
            <div class='w3-panel w3-round w3-green w3-display-container'>
              <span onclick="this.parentElement.style.display='none'"
              class=' w3-text-red w3-xlarge w3-round w3-button w3-display-topright'><b>&times;</b></span>
              <?php
              echo "<h6>Success!</h6><br><p> Patient has been added </p>";
              ?>
            </div>
            <?php
          }
          if ($message == 2) {
            ?>
            <div class='w3-panel w3-round w3-red w3-display-container'>
              <span onclick="this.parentElement.style.display='none'"
              class=' w3-text-white w3-xlarge w3-round w3-button w3-display-topright'><b>&times;</b></span>
              <?php
              echo "<h6>Error!</h6><p> Patient has not been added</p>";
              ?>
            </div>
            <?php
          }
        }
        ?>
      </div>

      <form  name="patregform" method="POST" action="../../config/pat.php" autocomplete="on" >


        <div id="card-body">
          <style type="text/css">

          fieldset{
            border: transparent;
          }

        </style>

        <fieldset><legend><b>Personal info</b></legend>         
          <div class="form-group col-xs-4"> 
            <label for="idno">Id No</label>:
            <input type="text" class="form-control"  required  placeholder="Id No" autofocus name="idno"/>
          </div>
          <div class="form-group col-xs-4">
            <label for="dob">Date of Birth:</label>
            <input type="Date" class="form-control" required  placeholder="Date of Birth" autofocus name="dob"/>
          </div>
          <div class=" form-group col-xs-4 w3-container">
            <label>Gender</label>
            <select class="form-control" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>

          </div>
        </fieldset>
        <fieldset >
          <div class="form-group col-xs-4 " >  
            <label for="firstname">Firstname:</label>
            <input type="text" required class="form-control" placeholder="First name" name="firstname"/>
          </div>
          <div class="form-group col-xs-4">
            <label for="surname">Surname:</label>
            <input type="text" required class="form-control" placeholder="Surname" name="surname"/>
          </div>
          <div class="form-group col-xs-4">   
            <label for="">Othername:</label>
            <input type="text"  class="form-control" placeholder="Othername" name="othername"/>
          </div></fieldset>

          <hr>
          <fieldset><legend><b>Contact Details</b></legend>
            <div class="form-group col-xs-4"> 
              <label for="phoneno">Phone Number:</label>
              <input type="text" class="form-control" pattern="[0-9]{10}" required placeholder="Phone Number" name="phoneno"><br>
            </div>
            <div class="form-group col-xs-4">
              <label for="emailadd">Email Address</label>
              <input type="email" class="form-control" placeholder="Email address" name="emailadd"/><br>
            </div>
            <div class="form-group col-xs-4">
              <label for="homeadd">Home Address:</label>
              <input type="text" class="form-control " required placeholder="Home address" name="address"><br>
            </div>
          </fieldset>
          <hr>
          <fieldset><legend><b>Medical Details</b></legend>
            <div class="form-group col-xs-4"> 
              <label for="bloodtype">Blood group:</label>
              <select class="form-control" name="bloodgroup">
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
            </div>

          </fieldset>

        </div>  


        <div class="card-footer " align="center" style="padding-bottom: 10px;">
          <button class="btn-lg btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>



  <!-- Footer -->
  <footer class="w3-container w3-theme-d4 w3-padding-16 " style="margin-top: 10px;">
    <h4>MedHos Refferal Hospital</h4>
    <p class="w3-right w3-text-white">Developed by <b>Tony Kiprono</b>
    </p>
  </footer>
</div>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</body>
</html>