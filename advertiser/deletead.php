<?php 
	session_start();
	include_once "../config.php";
	$del=$_POST[d];
	foreach ($del as $key => $value)
	{
		$delete="DELETE FROM new_ad WHERE adname='$value'";
		$query=mysqli_query($conn,$delete);

	}
		echo "<script>
		window.location.href='viewuploadedads.php'
		</script>

	";


 ?>