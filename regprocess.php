<?php
require "dbcon.php";
if(isset($_POST['regis']))
{
	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phoneNumber=$_POST['phoneNumber'];
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
	$gender=$_POST['gender'];
	$q= "select * from registration where username='$username'";
	$result=mysqli_query($con,$q);
	if(mysqli_num_rows($result)>=1)
	{
		echo "Try Another user Name";
	}
	else
	{
		mysqli_query($con,"INSERT INTO registration (fullname,username,email,phoneNumber,password,confirmPassword,gender) VALUES ('$fullname','$username','$email','$phoneNumber','$password','$confirmPassword','$gender')") or die("".mysqli_error());
		header ('location:loglin.php');
	}
	
}
?>


