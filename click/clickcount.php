<?php
	 $clicks = 0;

	 $targetwebsite = $_GET['url'];
	 //echo $targetwebsite;
	 $clientwebsite = $_GET['clientwebsite'];
	 //echo $clientwebsite;
	 $adname=$_GET['adname'];
	 //echo $adname;
	 // $ip = gethostbyname($clientwebsite);
	 // echo $ip;

	 include '../config.php';
	 $select = "SELECT * FROM `client` where sitename= '$clientwebsite'";
	 $query = mysqli_query($conn,$select);
	 while($res = mysqli_fetch_array($query))
	{	 

		$clientemail =  $res['email'];
	    $dbsitename =  $res['sitename'];
	}
	 


	 	$select2= "SELECT * FROM click_count WHERE adname = '$adname' AND client_email='$clientemail';";
	 	$query1=mysqli_query($conn,$select2);
	 	if($query1)
	 	{
	 		$result = mysqli_fetch_array($query1);
	 	 $clicks = $result['click_count'];
	 	
	 	$clicks = $clicks+1;
	 	$update = "UPDATE click_count SET click_count = '$clicks' where client_email='$clientemail' AND adname = '$adname'";
	 	$query2 = mysqli_query($conn,$update);
	 	// if($query2){
	 	// //echo 'UPDATEs DONE';
	  //   }

	    echo "
	    	<script>
	    	window.location.href='http://$targetwebsite'
	    	</script>
	    ";
	 

	 	}
	 	
	 

	 
	


?>