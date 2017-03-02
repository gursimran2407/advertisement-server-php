<?php  

if(isset($_POST['sub']))
{
	include_once '../config.php';
	$name=$_POST['name'];
	$email= $_POST['email'];
	$phone=$_POST['phone'];
	$pass = $_POST['pass'];
	$company=$_POST['comp'];
	$site=$_POST['site'];
	$ip = gethostbyname($site);

	$address=$_POST['address'];
	$country=$_POST['country'];
	$passmd = md5($pass);

	
	$insert2 = "insert into login values('$email','$passmd','client')";
	$insert = "insert into client values('', '$name','$email','$phone','$passmd','$company','$site','$ip','$address','$country')";
	$query2 = mysqli_query($conn, $insert2);
	$query = mysqli_query($conn, $insert);
	echo "<script>
		window.location.href='../login.php'
		</script>

	";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Client Signup</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" type="text/css" href="../css/login.css" media="all">
	<link href='//fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
		<h1>Client Signup</h1>
		<div class="main-row">
			<div class="agileits-top"> 
	<form action="clientsignup.php" method="POST">

		<input type="text" name="name" required placeholder="Name" class="text">
		

		<input type="text" name="comp" required placeholder="Company" class="text">
		

		<input type="text" name="site" required placeholder="Website" class="text">
		

		<input type="text" name="address" required placeholder="Address" class="text">
		
		<input type="text" name="country" required placeholder="Country" class="text">

		

		<input type="text" name="email" required class="text" placeholder="Email">
		

		<input type="text" name="phone" accept="number" maxlength="10" required class="text" placeholder="Phone Number">
		

		<input type="password" name="pass" required class="text" placeholder="Password">
		
		<input type="submit" name="sub" value="SIGNUP" >
		
<p><a href="../login.php">Already a user?</a></p>
	</form>
</div>
</div>
</div>
</body>
</html>