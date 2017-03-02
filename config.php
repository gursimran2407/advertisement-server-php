<?php
$username = 'root';
$password = 'root';
$hostname = 'localhost:8889';
$databasename='ad_server';
$conn = mysqli_connect($hostname, $username, $password, $databasename);

if($conn){
	//echo 'successfully connected'. '<br>';

}else{
	die(mysql_connect_error($conn));
}


?>