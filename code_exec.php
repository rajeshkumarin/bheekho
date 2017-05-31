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
$query="INSERT INTO member(name, email, phone, state, city, issue, message)VALUES('$name', '$email', '$phone', '$state', '$city', '$issue', '$message')";
$connect->query($query);
header("location: memberlist.php?remarks=success");
mysqli_close($con);
?>