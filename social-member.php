<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap Responsive Onepage HTML Template">
    <meta name="author" content="">
	<!--title-->
    <title>Bheekho Foundation | Social Member</title>
	
	<!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">	
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/form.css" rel="stylesheet">
	<link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">	
	
	<!--Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon-16x16.png">
	<link rel="manifest" href="images/ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/ico/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<script type="text/javascript">
	function validateForm()
{
var a=document.forms["reg"]["name"].value;
var b=document.forms["reg"]["email"].value;
var c=document.forms["reg"]["phone"].value;
var d=document.forms["reg"]["state"].value;
var e=document.forms["reg"]["city"].value;
var f=document.forms["reg"]["issue"].value;
var g=document.forms["reg"]["message"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("contact must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("picture must be filled out");
  return false;
  }
if (g==null || g=="")
  {
  alert("username must be filled out");
  return false;
  }
}
	</script>
	<?php 
    $remarks = "";
    if ( isset($_GET['remarks']) ) {
        $remarks = $_GET['remarks'];
    }
    if ( $remarks == 'success' ) {
        echo 'Registration Success';
    }
?>
</head><!--/head-->
<body>	
	<div class="container">
			<div class="section-title">
				<h1>We need  Help</h1>
			</div>	
		<div id="contact">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					
					<div class="row contact-details">
						<div class="col-sm-4">
							<span><i class="fa fa-map-marker"></i></span>
							<p class="contact-info">India</p>
						</div>
						<div class="col-sm-4">
							<span><i class="fa fa-phone"></i></span>
							<p class="contact-info">+(91) 8987425586 </p>
						</div>
						<div class="col-sm-4">
							<span><i class="fa fa-envelope"></i></span>
							<a class="contact-info" href="#">contact@bheekhofoundation.com</a>
						</div>
					</div>
					
					<div class="contact-form">
						<form id="contact-form" class="contact-form" name="contact-form" method="post" action="code_exec.php" onsubmit="return validateForm()">
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="name" class="form-control" required="required" placeholder="Name">
									<input type="email" name="email" class="form-control" required="required" placeholder="Email Address">
									<input type="tel" name="phone" class="form-control" required="required" placeholder="Number">
								</div>
								<div class="form-group col-sm-6">
										<input type="text" name="state" class="form-control" required="required" placeholder="State">
										<input type="text" name="city" class="form-control"  placeholder="City">
										<select class="form-control" type="issue" name="issue" placeholder="">
											<option>--Select your Concern--</option>
											<option>Education</option>
											<option>Health</option>
											<option>Children</option>
											<option>Economic</option>
											<option>Disaster</option>
										</select>
								</div>
								<div class="form-group col-sm-12">
									<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Describe your issues"></textarea>
								</div> 
							</div>				                                   
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<!--/#scripts--> 
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.parallax.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<script type="text/javascript" src="js/jquery.nav.js"></script>
	<script type="text/javascript" src="js/canvas.js"></script>
	<!--<script type="text/javascript" src="js/preloader_canvas.js"></script>-->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>