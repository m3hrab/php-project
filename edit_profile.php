<?php
require "dbcon.php";
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('location: login.php'); 
}

$username = $_SESSION['username'];
$q = "SELECT * FROM registration WHERE username='$username'";
$result = mysqli_query($con, $q);
$user_data = mysqli_fetch_assoc($result);

$successMessage = "";

if (isset($_POST['update_profile'])) {
    $newName = $_POST['newName'];
    $newEmail = $_POST['newEmail'];
    $newPhoneNumber = $_POST['newPhoneNumber'];
    $newPassword = $_POST['newPassword'];

    $updateQuery = "UPDATE registration SET fullname='$newName', email='$newEmail', phoneNumber='$newPhoneNumber',
                    password='$newPassword' WHERE username='$username'";
    if (mysqli_query($con, $updateQuery)) {
        $successMessage = "Profile updated successfully!";
    } else {
        $successMessage = "Error updating profile: " . mysqli_error($con);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
				*{
		padding: 0;
		margin:0;
		box-sizing:border-box;
		font-family: sans-serif;
		text-decoration:none;
		outline: none;
		box-sizing: border-box;
		}

		section{
			padding: 2rem 9%; 
		}
		section : nth-child(even){
		background: white;
		}
		.header{
			padding:.5rem 9%;
			position:fixed;
			top: 0; left:0; right:0;
			box-shadow: 0 .5rem rgba(0,0,0,.1);
			display:flex;
			align-items: center;
			justify-content:space-between;
			background: #2596be;
			
		}
		.header .logo{
			font-size:1.2rem;
			color:black;
			text-transform:lowercase;
			box-shadow: 5px 5px 5px 5px #888888;
		}
		.header .logo i{
			color:red;
		}

		.header .navbar ul {
		display: inline-flex;
		list-style:none;
		color:#FFFFFF;
		text-align:center;

		}
		.header .navbar ul li {
		margin: 10px;
		}

		.header .navbar a{
			font-size: 1rem;
			color:white;
			margin-left: 1.3rem;
			padding:.6rem;
		}
		.header .navbar a:hover{
			color:red;
			background:white;	
			border-radius:1rem;
		}
	</style>
    <link rel="stylesheet" href="profile.css">

</head>
<body>
<header class="header">
		<a href="#" class ="logo"><i class="fa-solid fa-heart-pulse"></i>medical</a>
		<nav class="navbar">
			<ul>
                <li><a href="newhome.php">Home</a></li>
                <li><a href="#service">Services</a>
                </li>
                <li><a href="#about">About Us</a></li>
                <li><a href="doctors.php">Doctors</a></li>
                <li><a href="#contact">Diagnosis</a>	 </li>
                
                <li><a href="#contact">Rating</a></li>
                
                <li><a href="#appointment">Appointment</a></li>
                <li><a href="edit_profile.php">My Profile</a></li>
			</ul>
		</nav>
		<div id="menu-bar" class="fas fa-bars"></div>
	</header>

    <section class="update-profile">
        <h1>Update Profile Information</h1>
        <form method="post" action="edit_profile.php">
            <div>
                <label for="newName">Name:</label>
                <input type="text" id="newName" name="newName" value="<?php echo $user_data['fullname']; ?>" required>
            </div>
            <div>
                <label for="newEmail">Email:</label>
                <input type="email" id="newEmail" name="newEmail" value="<?php echo $user_data['email']; ?>" required><br>
            </div>
            <div>
                <label for="newPhoneNumber">Phone Number:</label>
                <input type="tel" id="newPhoneNumber" name="newPhoneNumber" value="<?php echo $user_data['phoneNumber']; ?>" required><br>
            </div>
            <div>
                <label for="newPassword">Password:</label>
                <input type="text" id="newPassword" name="newPassword" value="<?php echo $user_data['password']; ?>" required><br>
            </div>     
            
            <div class="button">
                <input type="submit" name="update_profile" value="Update Profile">
            </div>
        </form>
    
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
    <div>
    <p class="message"><?php echo $successMessage; ?></p>
    </div>
    </section>
	
</body>
</html>