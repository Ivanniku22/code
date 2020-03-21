<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$con=mysqli_connect("localhost","root","","login");
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysqli_real_escape_string($con,$username);
	$password = mysqli_real_escape_string($con,$password);
	
	mysqli_connect("localhost","root","","login");
	mysqli_select_db($con,"login");
	
	$result = mysqli_query($con,"select * from users where username ='$username' and password ='$password'") or die ("Failed to query database ".mysqli_error($con));
	$row = mysqli_fetch_array($result);
	if((isset($row['user'])==$username) && (isset($row['pass'])==$password)){
		echo "Login Success!!!".$row['username'];
	}
	else{
		echo "Failed to login!!!!";
	}
?>