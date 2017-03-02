<?php
include_once "config.php";
$select = "SELECT * FROM `client` ";
	 $query = mysqli_query($conn, $select);
	 while($res = mysqli_fetch_array($query))
	 {
	 	echo $res['sitename'];
	 }




?>