<?php 
	session_start();
	if($_SESSION['category']=='advertiser')
	{	 
		header("location: advertiser/advertiserpanel.php");
	}
	else
	{
		header("location: client/clientpanel.php");
			
	}
	
 ?>