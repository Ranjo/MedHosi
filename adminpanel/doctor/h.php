<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../Images/icon.ico">
	<link rel="stylesheet" href="../../css/header.css">
	<link rel="stylesheet" href="../../css/w3/w3.css">
	<link rel="stylesheet" href="../../css/w3/all.css">
	<link rel="stylesheet" href="../../css/Ralewaycss.css">
	<link rel="stylesheet" href="../../css/admincss/admincss.min.css">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/doc.css">
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<script src="../../script/jquery.js"></script>
	<script src="../../js/dist/jstree.js"></script>
	<link rel="stylesheet" type="text/css" href="../../js/themes/default/style.css">
	<script src="../../js/dist/adminlte.js"></script>
	<script>
		$(function() {
			$('#sideber').tree();
		});
	</script>
</head>
<body class="hold-transition sidebar-mini">
	<?php
	$today = new DateTime();
$birthdate = new DateTime("1995/04/18");
$interval = $today->diff($birthdate);
echo $interval->format('%y years');
 //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "12-17-1983";
  //explode the date to get month, day and year
  $birthDate = explode("-", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  echo "Age is:" . $age;
?>


<div class="w3-container">
<fieldset><legend><b>Personal info</b></legend>         
          <div class="form-group col-xs-4"> 
            <label for="idno">Id No</label>:
            <input type="text" class="form-control" disabled required  value="Id No" autofocus name="idno"/>
          </div>
          <div class="form-group col-xs-4">
            <label for="dob">Date of Birth:</label>
            <input type="text" disabled class="form-control" required  value="Date of Birth" autofocus name="dob"/>
          </div>
          

          
        </fieldset>
        <fieldset >
          <div class="form-group col-xs-4 " >  
            <label for="firstname">Firstname:</label>
            <input type="text" required  disabled class="form-control" value="First name" name="firstname"/>
          </div>
          <div class="form-group col-xs-4">
            <label for="surname">Surname:</label>
            <input type="text" required class="form-control"  disabled value="Surname" name="surname"/>
          </div>
          </fieldset>
      </div>
</body>
<style type="text/css">
	input[type=text]{
		border: none;
		background-color: white;

	}
</style>