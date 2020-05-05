<?php
//session_start();


	/*
	Fetching the  data from front end
	and storing it in the vaiables
	*/
	if (isset($_POST['email'])|| isset($_POST['phoneNo']) || isset($_POST['password']) || isset($_POST['rePassword'])
		|| isset($_POST['address']) || isset($_POST['address2'])|| isset($_POST['City']) || isset($_POST['state']) 
		|| isset($_POST['Zip']))
	{
		$email 	  = $_POST['email'];
		$phoneNo  = $_POST['phoneNo'];
		$password = $_POST['password'];
		$rePassword = $_POST['rePassword'];
		$address  = $_POST['address'];
		$address2 = $_POST['address2'];
		$City     = $_POST['City'];
		$state    = $_POST['state'];
		$Zip      = $_POST['Zip'];
	}
	/*------------------------------------------*/
	

	/*Displaying the variables*/
	/*echo $phoneNo;
	echo "<br>";*/
	
	/*------------------------*/

	

	/*-----------------------*/
	/*Connect the database*/
	$con =	mysqli_connect('localhost','root','');

	mysqli_select_db($con,'water');
	
	$query  = "insert into register(email,phone_no,password,retype_password,address,address_2,city,state,zip) values('$email','$phoneNo','$password','$rePassword','$address','$address2','$City','$state','$Zip');";
	
	mysqli_query($con,$query);
	/*----------------------*/

?>