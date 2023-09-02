<?php
require "dbcon.php";
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$q= "select * from registration where username='$username' AND password='$password'";
	$result=mysqli_query($con,$q);
	if (mysqli_num_rows($result) == 1) {
		session_start();
		$_SESSION['username'] = $username; 
		header('location: newhome.php'); 
		exit;
	} else {
		echo "Username and Password are wrong. Check and try again ";
	}
}
?>