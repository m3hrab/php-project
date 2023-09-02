<? php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Registration Form</title>
<meta name="viewpoint" content="width=device-width,initial-scale=1.0"/>
<link rel="stylesheet" href="style.css"/>

<script>
function validform() {
    var y = document.forms['regform']['username'].value;
    if (y == "") {
        alert("Name Empty");
        document.forms['regform']['username'].focus();
        return false;
    }

    var password = document.forms['regform']['password'].value;
    var confirmPassword = document.forms['regform']['confirmPassword'].value;

    if (password.length < 5) {
        alert("Password must be at least 8 characters long");
        document.forms['regform']['password'].focus();
        return false;
    }

    var lowercaseRegex = /[a-z]/;
    var uppercaseRegex = /[A-Z]/;
    var digitRegex = /[0-9]/;
    var symbolRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\\-\/]/;

    if (!lowercaseRegex.test(password) || !uppercaseRegex.test(password) || !digitRegex.test(password) || !symbolRegex.test(password)) {
        alert("Password must include at least one lowercase letter, one uppercase letter, one digit, and one symbol");
        document.forms['regform']['password'].focus();
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match");
        document.forms['regform']['confirmPassword'].focus();
        return false;
    }
}

</script>
</head>

<body>
<div class="container">
	<h1 class="form-title">Registration</h1>
	
<form action="regprocess.php" onSubmit="return validform()" name="regform" method="post">

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
		
		<input type="submit" name="update" value="Update">
	</div>
</form>
</div>
</body>






</html>