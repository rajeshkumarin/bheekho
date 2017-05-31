<?php
session_start();
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$city=$_POST['city'];
$contribution=$_POST['contribution'];

$query="INSERT INTO revolution(name, email, phone, state, city, contribution)VALUES('$name', '$email', '$phone', '$state', '$city', '$contribution')";
$connect->query($query);
header("location: revolutionaries.php?remarks=success");
mysqli_close($con);
?>