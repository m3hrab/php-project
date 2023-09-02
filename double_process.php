
<!DOCTYPE html>
<?php 
$servername ="localhost";
$username ="root";
$password ="";
$dbname="database";


$fullname ="";
$username="";
$email ="";
$phoneNumber ="";
$password="";
$confirmPassword="";
$gender ="";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//conncet to mysql database
try{
	$conn=mysqli_connect($servername,$username,$password,$dbname);
}
catch(MySQLi_sql_Exception $ex){
	echo ("error in connecting");
}
//get data from the form
function getData(){
	$data =array();
	$data[0]=$_POST['fullname'];
	$data[1]=$_POST['username'];
	$data[2]=$_POST['email'];
	$data[3]=$_POST['phoneNumber'];
	$data[4]=$_POST['password'];
	$data[5]=$_POST['confirmPassword'];
	$data[6]=$_POST['gender'];

	
	return $data;
}


if(isset($_POST['update'])){
	$info =getData();
	$update_query= " UPDATE `registration` SET fullname='$info[0]', username='$info[1]', email='$info[2]', password='$info[4]', confirmPassword = '$info[5]', gender ='$info[6]' WHERE phoneNumber ='$info[3]' ";
	
	try{
		$update_result= mysqli_query($conn,$update_query);
		if($update_result){
			if(mysqli_affected_rows($conn)>0){
				echo ("data updated");
			}else{
				echo ("data no updated");
			}
		}
		}catch(Exception $ex){
			echo("error in update".$ex>getMessage());
	}












}


?>


</head>

<body>


<body>
<div class="container">
	<h1 class="form-title">Registration</h1>
	
<form action="" method="post">

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
		<input type="submit" name="update" value="Update">
		<!--<input type="submit" name="update" value="update">
		<input type="submit" name="delete" value="delete">
		<input type="submit" name="serach" value="serach"> -->
	</div>




























</body>
</html>