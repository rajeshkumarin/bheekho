<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap Responsive Onepage HTML Template">
    <meta name="author" content="">
	<!--title-->
    <title>Bheekho Foundation | Revolutionaries List</title>
	
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
	
	</head><!--/head-->
<body>	
	<div class="container">
			<div class="section-title">
				<h1>We are available for help</h1>
			</div>
		<div class="row"> 
			<div class="col-sm-10 col-sm-offset-1">
				<table class="table table-bordered">
					<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>State</th>
					<th>City</th>
					<th>Contribution</th>
					
				  </tr>
				  <?php
							//Create Connection with MySQL Database
							$con = mysqli_connect('localhost','chandan','1234');

							//Select Database
							if(!mysqli_select_db($con,'ngo'))
							{
								echo "Database Not Selected";
							}
							//Select Query
							$sql = "SELECT * FROM revolution";

							//Execute the SQL query
							$records = mysqli_query($con,$sql);

							while($row = mysqli_fetch_array($records))
							{
								echo "<tr>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['phone']."</td>";
								echo "<td>".$row['state']."</td>";
								echo "<td>".$row['city']."</td>";
								echo "<td>".$row['contribution']."</td>";
								echo "</tr>";
							}
						?>
				</table>
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