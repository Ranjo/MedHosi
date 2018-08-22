<?php
//session_start();
include '../../config/adminsession.php';

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
<link rel="stylesheet" type="text/css" href="../../css/maincss.css">


<body>
    <body class="skin-black">
      <div class="w3-top " style="margin-left: 300px; width:79% ">
        <div class="medhos top">

          MedHos Referral Hospital
          <span class="plus">+</span>
          <div class="top w3-right w3-small-hide  w3-wide" style="font-size: 14px; margin-top: 10px;">Providing Better healthcare</div>

        </div>
        <div class="w3-bar w3-text-white w3-large" style="z-index:4; width: 99%; background-color: #1e2226; opacity: 1;">
          <span class="w3-left ">Welcome, <strong><?php echo $_SESSION['login_admin']?></strong></span>
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
            <h7 class="w3-left w3-wide "  >Administrator</h7><br>
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
      <li class="treeview active">
        <a href="#">
          <i class="fa fa-user"></i> <span>Doctor</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="doc.php"><i class="fa fa-circle-o"></i> Add Doctor<i class="fa fa-cross"></i></a></li>
          <li><a href="viewd.php"><i class="fa fa-circle-o"></i> View Doctors</a></li>
          <li><a href="viewR.php"><i class="fa fa-circle-o"></i> Reports</a></li>

        </ul>
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
          <i class="fa fa-dashboard"></i> <span>Hospital</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../hospital/addhos.php"><i class="fa fa-circle-o"></i> Add Hospital</a></li>
          <li><a href="../hospital/viewh.php"><i class="fa fa-circle-o"></i> View Hospital</a></li>
          <li><a href="../hospital/hosR.php"><i class="fa fa-circle-o"></i> Reports</a></li>

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
          <li><a href="../notice/createn.php"><i class="fa fa-circle-o"></i> Create Notices</a></li>
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
<div class="w3-main w3-theme-l4 " style="margin-left:300px;margin-top: 109px; ">

    <!-- Header -->
    <!-- Header -->
    <header class="w3-container w3-main w3-theme-l2 " style="padding-top:30px; margin-bottom: 10px;">
      <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
    </header>

    <div class="w3-container " >
      <div class="card card-primary w3-theme-light">
       <div class="card-header  w3-theme-d2"style="padding-top:5px">
        <h3 class="card-title">Add Doctor</h3>
      </div>

      <form   role="form" name="docregform" method="POST" action="../../config/doc.php" autocomplete="on">
        <div class="card-body">
          <p>
            <?php

            if (isset($_GET['msg'])) {
              $message = $_GET['msg'];
              if ($message == 1) {
                echo "<div class='alert alert-success'>";
                echo "<strong>Success!</strong> Doctor has been added";
                echo "</div>";


              }
              if ($message == 2) {
                echo "<span  style ='color: red'>Invalid username or Password</span>";  
              }
            }
            ?>

          </p>


          
          <div class="form-group">
            <label>Id No<span class="w3-text-red">*</span></label> <br>
            <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="[0-9]{4,}" title="must not be less than 4"  required  placeholder="Id No" autofocus name="idno"/>
            <span class="validity"></span>

          </div>

          <div class="form-group">
            <label>Hospital Id<span class="w3-text-red">*</span></label><br> 
            <input type="text"  required name="hosid">
            <span class="validity"></span>
          </div>
          <div class="form-group">
            <label>Firstname<span class="w3-text-red">*</span></label><br> 
            <input type="text"  required  pattern="[A-Z a-z].{0,}" placeholder="First name" name="firstname"/>
            <span class="validity"></span>
          </div>
          <div class="form-group">
            <label>Surname<span class="w3-text-red">*</span></label></label> <br>
            <input type="text"  required  placeholder="Surname" name="surname"/>
            <span class="validity"></span>
          </div>

          <div class="form-group">
            <label> Phone Number<span class="w3-text-red">*</span></label><br>
            <input type="text"  pattern="[0-9]{10}" title="10 digits" required placeholder="Phone Number" name="phoneno">
            <span class="validity"></span>
          </div>
          <div class="form-group">
            <label>Email Address<span class="w3-text-red">*</span></label><br> 
            <input type="email"  required  placeholder="Email address" name="emailadd"/>
            <span class="validity"></span>
          </div>
          <div class="form-group">
            <label>Home Address<span class="w3-text-red">*</span></label><br> 
            <input type="text"  required placeholder="Home address" name="address"> <span class="validity"></span>        
          </div>
          <div class="form-group">
            <label for="password">Password<span class="w3-text-red">*</span></label><br>
            <input type="password"  id="pass" required placeholder="Password" name="pass" />
            <span class="validity"></span>
          </div>

          <div class="card-footer ">
            <button type="submit"  class="btn btn-lg btn-primary">Add</button>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>

<div style="margin-left:300px;" >
 <!-- Footer -->
 <footer class="w3-container w3-theme-d4 w3-padding-16 " style="margin-top:10px; ">
  <h4>MedHos Refferal Hospital</h4>
  <p>Developed by <b>Tony Kiprono</b>
  </p>
</footer>
</div>
</div>
</body>
</html>