<?php 
	
	include_once "../config.php";
	$del=$_POST[d];

	foreach ($del as $key => $value)
	{ 
		$delete="DELETE FROM advertiser_register WHERE email='$value'";
		$query=mysqli_query($conn,$delete);
			$delete2="DELETE FROM login WHERE email='$value' AND category='advertiser'";
		$query2=mysqli_query($conn,$delete2);
			$delete3="DELETE FROM new_ad WHERE email='$value'";
		$query3=mysqli_query($conn,$delete3);
	

	}
	echo "<script>
		window.location.href='adminviewadvertiser.php'
		</script>

	";


 ?>