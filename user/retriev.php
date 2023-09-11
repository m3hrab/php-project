<?php 
include_once 'database.php';
$result =mysqli_query($conn, "select * from user");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="retriev.css">
</head>
<body>
<div class="container">
	<h1 class="form-title">Registration</h1>
	
<form action="" method="post">

	<div class="main-user-info">
		<div class="user-input-box">
			<label for="fullname">Full Name : </label>
			<input type="text" id="fullname" name="fullname" placeholder="Enter Full Name"/> <br></br>
		</div>
		
		<div class="user-input-box">
			<label for="username">Username : </label>
			<input type="text" id="username" name="username" placeholder="Enter Username"/><br></br>
		</div>
		
		<div class="user-input-box">
			<label for="email">Email : </label>
			<input type="email" id="email" name="email"  placeholder="Enter Email" required /><br></br>
		</div>
		
		<div class="user-input-box">
			<label for="phoneNumber">Phone Number : </label>
			<input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number" pattern="[0-9]{11}"/><br></br>
		</div>
		
		<div class="user-input-box">
			<label for="password">Password : </label>
			<input type="password" id="password" name="password" placeholder="Enter Password" required /><br></br>
		</div>
		
		<div class="user-input-box">
			<label for="confirmPassword">Confirm Password : </label>
			<input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"/><br></br>
		</div>
</div>
	<div class="gender-details-box">
		<span class="gender-title">Gender : </span>
			<div class="gender-category">
				<input type="radio" name="gender" id="male">
				<label for="male" value="m">Male</label>
				<input type="radio" name="gender" id="female">
				<label for="female" value="f">Female</label>
				<input type="radio" name="gender" id="other" value="o">
				<label for="other">Other</label><br></br>
				</div>
			</div>
	<div class="form-submit-btn">
		<input type="submit" name="regis" value="Register">
	</div>
</form>
</div>
</body>
