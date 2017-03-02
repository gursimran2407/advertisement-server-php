<?php
session_start();

if(isset($_POST['sub']))
{	include_once "config.php";
	 $email = $_POST['email'];
	 $password = $_POST['pass'];
	 $password = md5($password);

	 $select = "SELECT * FROM `login` WHERE email='$email'";
	 $query = mysqli_query($conn, $select);
	 $res = mysqli_fetch_array($query);
	 
	 $db_pass = $res['password'];
	 $category = $res['category'];
	 if($password == $db_pass)
	 {
	 	$_SESSION['email'] = $email;
	 	$_SESSION['category'] = $category;
	 	header("Location: redirect.php");
	 }
else
{
	echo "<script>
			alert('Your ID/Password is incorrect')
			</script>";
}
	 
}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" type="text/css" href="css/login.css" media="all">
	<link href='//fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
		<h1>Login Page</h1>
		<div class="main-row">
			<div class="agileits-top"> 

<form action = "login.php" method="POST">
<!--<label id="email">Enter Email</label>-->
<input type="text" name="email" required class="text" placeholder="Email">

<!--<label id="pass">Enter Password</label>-->
<input type="password" name="pass" required class="text" placeholder="Password">


<input type="submit" name = "sub" value = "LOGIN" >
</form>
</div>	 
		</div>	
		</div>
</body>
</html>