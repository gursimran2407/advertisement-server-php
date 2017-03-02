<?php  

if(isset($_POST['sub']))
{
	include_once '../config.php';
	$name=$_POST['name'];
	$email= $_POST['email'];
	$phone=$_POST['phone'];
	$pass = $_POST['pass'];
	$company=$_POST['comp'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$website = $_POST['website'];
	$passmd = md5($pass);

	$insert = "insert into advertiser_register values('','$company','$name','$passmd','$website','$address','$phone','$email','$country')";
	$insert2 = "insert into login values('$email','$passmd','advertiser')";
	$query = mysqli_query($conn, $insert);
	$query2 = mysqli_query($conn, $insert2);
		echo "<script>
		window.location.href='../login.php'
		</script>

	";
	
}


?>
<!DOCTYPE html>
<html>
<head>
	<title> Advertiser Signup</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" type="text/css" href="../css/login.css" media="all">
	<link href='//fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
		<h1>Advertiser Signup</h1>
		<div class="main-row">
			<div class="agileits-top"> 

	<form action="adsignup.php" method="POST">
		<!--<label id="name">Name</label-->
		<input type="text" name="name" required placeholder="Name" class="text">
		
		<!--<label id="comp">Company</label>-->
		<input type="text" name="comp" required placeholder="Company" class="text">
		<!--<label id="comp">Website</label>-->
		<input type="text" name="website" required placeholder="Website" class="text">
		
		<!--<label id="address">Address</label>-->
		<input type="text" name="address" required class="text" placeholder="Address">
		
		<!--<label >COUNTRY</label>-->
		<input type="text" name="country" required class="text" placeholder="Country">
		
		<!--<label id="email">Email</label>-->
		<input type="text" name="email" required class="text" placeholder="Email">
		
		<!--<label id="phone">Contact</label>-->
		<input type="text" name="phone" accept="number" maxlength="10" required class="text" placeholder="Phone Number">
		
		<!--<label id = "pass">Password</label>-->
		<input class="text" type="password" name="pass" required placeholder="Password">
		
		<input type="submit" name="sub" value="SIGNUP">
		
		<p><a href="../login.php">Already a user?</a></p>
		<!--<label>Already a user?</label>-->
		
	</form>

			</div>
		</div>
	</div>

</body>
</html>