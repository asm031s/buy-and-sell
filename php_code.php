<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'buy_and_sell');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		
		 $name =$_POST['name1'];
    $gender = $_POST['gender'];
	$email =$_POST['email'];
    $mobile = $_POST['mobile'];
	$address =$_POST['address'];
    $city = $_POST['city'];
	$state =$_POST['state'];
    $zip = $_POST['zip'];
	$cnumber =$_POST['cnumber'];
    $monthyear = $_POST['monthyear'];
	$cardholdername = $_POST['cardholdername'];

		mysqli_query($db, "INSERT INTO biling (name,gender,email,mobile,address,city,state,zip,cnumber,monthyear,cardholdername) VALUES ('$name','$gender','$email','$mobile','$address','$city','$state','$zip','$cnumber','$monthyear','$cardholdername')"); 
		$_SESSION['message'] = "information saved"; 
		header('location: insert.php');
	}