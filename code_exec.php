<?php
session_start();
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$city=$_POST['city'];
$issue=$_POST['issue'];
$message=$_POST['message'];
mysqli_query("INSERT INTO social-member(name, email, phone, state, city, issue, message)VALUES('$name', '$email', '$phone', '$state', '$city', '$issue', '$message')");
header("location: social-member.php?remarks=success");
mysql_close($con);
?>