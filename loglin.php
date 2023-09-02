<? php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="login.css">
<title>project</title>
</head>

<body>
<form action="loginprocess.php" name="" method="post">
    <h1> Sign In </h1>
	 <label for="name"><b>username :</b></label>
	 <input type="text" placeholder="Name" name="username" id="name" />
	  <label for="password"><b>Password : </b></label>
	 <input type="password" placeholder="Password" name="password" id="password" />

	<button type="submit" name="submit">Submit</button>
		
	</input>
</form>
</body>
</html>