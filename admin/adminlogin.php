<?php
session_start();

if(isset($_POST['sub']))
{	include_once "../config.php";
	 $uname = $_POST['uname'];
	 $password = $_POST['pass'];

	 $select = "SELECT * FROM admin_reg WHERE username='$uname'";
	 $query = mysqli_query($conn, $select);
	 $res = mysqli_fetch_array($query);
	 
	 $db_pass = $res['password'];
	 if($password == $db_pass)
	 {
	 	$_SESSION['uname'] = $uname;
	 	header("Location: adminpanel.php");
	 }
else
{
	echo "Your ID/Password is incorrect";
}
	 
}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" type="text/css" href="../css/login.css" media="all">
	<link href='//fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
		<h1>Admin Login Page</h1>
		<div class="main-row">
			<div class="agileits-top"> 

<form action = "adminlogin.php" method="POST">
<input type="text" name="uname" required class="text" placeholder="Username">


<input type="password" name="pass" required class="text" placeholder="Password">

<input type="submit" name = "sub" value = "LOGIN">



</form>
</div>
</div>
</div>
</body>
</html>