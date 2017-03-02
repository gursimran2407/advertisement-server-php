<?php 
	session_start();
	if (isset($_GET['q'])) 
	{
		$email=$_GET['q'];
		include_once "../config.php";
  		$select="select * from new_ad where email='$email'";
  		$query=mysqli_query($conn,$select);
	 	 echo "<table border='1' cellpadding='2' cellspacing='2'>
	    <tr>
	      <th>S. No.</th>
	      <th>Advetisement Name</th>
	      <th>Banner</th>
	      <th>Startdate</th>
	      <th>Enddate</th>
	      <th>Height</th>
	      <th>Width</th>
	      <th>Amount</th>
	    </tr>";
	    	$counter=0;
		  while($res=mysqli_fetch_array($query))
		  {
		  $counter++;
		  $adname=$res['adname'];
		  $imagepath=$res['imagepath'];
		  $startdate=$res['startdate'];
		  $enddate=$res['enddate'];
		  $height=$res['ad_height'];
		  $width=$res['ad_width'];
		  $amount=$res['amount'];
		  ?>

		    
		    <?php echo "
		    <tr>
		      <td>$counter</td>
		      <td>$adname</td>
		      <td><img src='$imagepath'></td>
		      <td>$startdate</td>
		      <td>$enddate</td>
		      <td>$height</td>
		      <td>$width</td>
		      <td>$amount</td>
		   	</tr>";

		};
		echo "</table>";
	}
		?>