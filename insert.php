<?php
include 'include/db.php';
require_once ("include/initialize.php");

//personal details
$firstName = $_POST['FNAME'];
$lastName = $_POST['LNAME'];
$address = $_POST['ADDRESS'];
$telephone = $_POST['TELNO'];
$email = $_POST['EMAILADDRESS'];
$username = $_POST['USERNAME'];
$password = sha1($_POST['PASS']);

//vehicle details
$model = $_POST['MODEL'];
$year = $_POST['YEAR'];
$transmission = $_POST['TRANSMISSION'];
$fuel = $_POST['FUEL'];
$description = $_POST['DESCRIPTION'];


$sql = "INSERT INTO `tblusers`(`firstName`, `lastName`, `address`, `telephone`, `email`, `username`, `password`, `model`, `year`, `transmission`, `fuel`, `description`) VALUES ('$firstName','$lastName','$address','$telephone','$email','$username','$password','$model','$year','$transmission','$fuel','$description')";
$con->query($sql);

message("Application Successful. You can login now!","success");
redirect("index.php?q=success");

// echo $firstName,$lastName,$address,$telephone,$email,$username,$password,$model,$year,$transmission,$fuel,$description;