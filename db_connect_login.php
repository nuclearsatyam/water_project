<?php
	
	$con =	mysqli_connect('localhost','root','');

	mysqli_select_db($con,'water');

	if(isset($_POST['email']) || isset($_POST['password']))
	{
		$email =$_POST['email'];
		$password =$_POST['password']; 
	}

	//echo $email." ".$password;
	$searching = "select email,password from register where email = '$email' && password = '$password' ";
	$result = mysqli_query($con,$searching);

	$number_of_rows = mysqli_num_rows($result);

	if ($number_of_rows >0) {

		echo "user exists...!!";
	}
	else{
		//$register_the_user = "insert into registration(username,pass) values('$username','$password')";
		//mysqli_query($con,$register_the_user);
		echo "user not available";
	}
	
	
?>