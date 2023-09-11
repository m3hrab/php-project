<? php
session_start();
$servername= "localhost";
$username = "root";
$password = "";
$dname ="database"
$fullname="";
$username="";
$email="";
$phoneNumber="";
$password="";
$confirmPassword="";
$gender="";
mysqli_report(mysqli_report_error | mysqli_report_strict)
//connect to mysql database
try{
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
}catch(MySQL_sql_Exception $ex){
	echo("error in connecting");
}
//get data from the Form
function getData(){
	$data = array();
	$data[0]=$_POST['fullname'];
	$data[1]=$_POST['username'];
	
	$data[2]=$_POST['email'];
	$data[3]=$_POST['phoneNumber'];
	$data[4]=$_POST['password'];
	$data[5]=$_POST['confirmPassword'];
	$data[6]=$_POST['gender'];
	return $data;
}
//search
if(isset($_POST['serach'])){
	$info= getData();
	$search_Query="SELECT * FROM update WHERE phoneNumber=$info[3] " ;

	$serach_result =mysqli_query($conn,$search_Query);
	if($search_result){
		if(mysqli_num_rows($search_result)){
			while($row =mysqli_fetch_array($serach_result)){
				$fullname=$row['fullname'];
				$username=$row['username'];
				$email=$row['email'];
				$phoneNumber=$row['phoneNumber'];
				$password=$row['password'];
				$confirmPassword=$row['confirmPassword'];
				$gender=$row['gender'];
			}
		}
		else{
			echo "no data for this number";
		}
		
	}








}

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
			<input type="text" id="fullname" name="fullname" placeholder="Enter Full Name" value="<?php echo $fullname;?>"/> <br></br>
		</div>
		
		<div class="user-input-box">
			<label for="username">Username : </label>
			<input type="text" id="username" name="username" placeholder="Enter Username" value="<?php echo $username;?>"/><br></br>
		</div>
		
		<div class="user-input-box">
			<label for="email">Email : </label>
			<input type="email" id="email" name="email"  placeholder="Enter Email" value="<?php echo $email;?>"required /><br></br>
		</div>
		
		<div class="user-input-box">
			<label for="phoneNumber">Phone Number : </label>
			<input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number" pattern="[0-9]{11}" value="<?php echo $phoneNumber;?>"/><br></br>
		</div>
		
		<div class="user-input-box">
			<label for="password">Password : </label>
			<input type="password" id="password" name="password" placeholder="Enter Password" value="<?php echo $password;?>" required /><br></br>
		</div>
		
		<div class="user-input-box">
			<label for="confirmPassword">Confirm Password : </label>
			<input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" value="<?php echo $confirmPassword;?>"/><br></br>
		</div>
</div>
	<div class="gender-details-box">
		<span class="gender-title">Gender : </span>
			<div class="gender-category">
				<input type="radio" name="gender"  value="<?php echo $gender;?>"id="male">
				<label for="male" value="m">Male</label>
				<input type="radio" name="gender" id="female">
				<label for="female" value="f">Female</label>
				<input type="radio" name="gender" id="other" value="o">
				<label for="other">Other</label><br></br>
				</div>
			</div>
	<div class="form-submit-btn">
		<input type="submit" name="insert" value="add">
		<input type="submit" name="update" value="update">
		<input type="submit" name="delete" value="delete">
		<input type="submit" name="serach" value="serach">
	</div>
</form>
</div>
</body>






</html>