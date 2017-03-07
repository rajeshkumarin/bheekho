<?php
session_start();
include('connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$city=$_POST['city'];
$contribution=$_POST['contribution'];

mysqli_query("INSERT INTO revolution (name, email, phone, state, city, contribution)VALUES('$name', '$email', '$phone', '$state', '$city', '$contribution')");
header("location: revolutionaries.html?remarks=success");
mysql_close($con);
?>