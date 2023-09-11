
<!DOCTYPE html>
<?php 
$servername ="localhost";
$username ="root";
$password ="";
$dbname="update";


$id ="";
$fname="";
$lname ="";
$address ="";
$email="";
$phoneNumber="";
$password="";
$confirmPassword="";
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
	$data[0]=$_POST['id'];
	$data[1]=$_POST['fname'];
	$data[2]=$_POST['lname'];
	$data[3]=$_POST['address'];
	$data[4]=$_POST['email'];
	$data[5]=$_POST['phoneNumber'];
	$data[6]=$_POST['password'];
	$data[7]=$_POST['confirmPassword'];
	return $data;
}

//search
if(isset($_POST['search'])){
	$info= getData();
	$search_query = "SELECT * FROM `update` WHERE id='$info[0]' " ;
	$search_result= mysqli_query($conn,$search_query);
	if($search_result){
		if(mysqli_num_rows($search_result)){
			while($rows = mysqli_fetch_array($search_result)){
				$id = $rows['id'];
				$fname = $rows['fname'];
				$lname = $rows['lname'];
				$address = $rows['address'];
				$email = $rows['email'];
				$phoneNumber = $rows['phoneNumber'];
				$password = $rows['password'];
				$confirmPassword = $rows['confirmPassword'];
			}
		}else {
			echo ("no data are available");
		}
		
	}

}
//insert
if(isset($_POST['insert'])){
	$info = getData();
	$insert_query="INSERT INTO `update`(`fname`, `lname`, `address`, `email`,`phoneNumber`,`password`,`confirmPassword`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]')";
	
	try{
		$insert_result = mysqli_query($conn,$insert_query);
		
		if($insert_result){
			if(mysqli_affected_rows($conn)> 0){
				echo ("data inserted");
			}else{
				echo ("data are not inserted");
			}
		}
	}catch (Exception $ex){
		echo ("error insert".$ex->getmessage());
	}

}
//delete
if(isset($_POST['delete'])){
	$info=getData();
	$delete_query = "DELETE FROM `update` WHERE id='$info[0]'";
	try{
		$delete_result= mysqli_query($conn,$delete_query);
		if($delete_result){
			if(mysqli_affected_rows($conn)>0){
				echo("data delete");
			}else{
				echo ("data not DELETE");
			}
		}
	}catch(Exception $ex){
		echo ("error in delete" .$ex -> getMessage());
	}
}

//update

if(isset($_POST['update'])){
	$info =getData();
	$update_query= " UPDATE `update` SET fname='$info[1]', lname='$info[2]', address='$info[3]', email='$info[4]',phoneNumber='$info[5]',password='$info[6]',confirmPassword='$info[7]' WHERE id ='$info[0]' ";
	
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
<form action=""  method="post">
	<input type ="number" name="id" placeholder="id" value="<?php echo ($id); ?>"><br></br>
	<input type ="text" name="fname" placeholder="First Name" value="<?php echo ($fname); ?>"><br></br>
	<input type ="text" name="lname" placeholder="Last Name" value="<?php echo ($lname); ?>"><br></br>
	<input type ="text" name="address" placeholder="address" value="<?php echo ($address); ?>"><br></br>
	<input type ="text" name="email" placeholder="email" value="<?php echo ($email); ?>"><br></br>
	<input type ="text" name="phoneNumber" placeholder="phoneNumber" value="<?php echo ($phoneNumber); ?>"><br></br>
	<input type ="password" name="password" placeholder="email" value="<?php echo ($password); ?>"><br></br>
	<input type ="password" name="email" placeholder="email" value="<?php echo ($confirmPassword); ?>"><br></br>
	
	
	
	
<div >
	<input type ="submit" name="insert" value="Add">
	<input type ="submit" name="update" value="Update">
	<input type ="submit" name="delete" value="Delete">
	<input type ="submit" name="search" value="Search">

</div>
</body>
</html>