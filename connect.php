<?php
$mysql_hostname = "localhost";
$mysql_user = "chandan";
$mysql_password = "1234";
$mysql_database = "ngo";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("Could not select database");
?>