  <?php 
  session_start();
    if($_SESSION['uname']=='root')
    {
		    include "../config.php";
		    $get="SELECT COUNT(*) FROM advertiser_register";
		    $query=mysqli_query($conn,$get);
		    if($query){
		    	
		    	while($res=mysqli_fetch_array($query))
		    	{
		    		 $countad=$res[0];
		    	}
		    }
		   
		    $select="SELECT COUNT(*) FROM client";
		    $query1=mysqli_query($conn,$select);
		    if($query1){
		    	
		    	while($res1=mysqli_fetch_array($query1))
		    	{
		    		 $countcl=$res1[0];
		    	}
		    }

		$select1="SELECT SUM(click_count) FROM click_count;";
		    $query2=mysqli_query($conn,$select1);
		    if($query2){
		    	
		    	while($res2=mysqli_fetch_array($query2))
		    	{
		    		 $countclicks=$res2[0];
		    	}}


		 $select2="SELECT SUM(click_count*0.75) from click_count;";
		    $query3=mysqli_query($conn,$select2);
		    if($query3){
		    	
		    	while($res3=mysqli_fetch_array($query3))
		    	{
		    		 $clickpay=$res3[0];
		    	}}   	
		    	// echo $clickpay.'<br>';
		    	// echo $countclicks.'<br>';
		    	// echo $countad.'<br>';
		    	// echo $countcl.'<br>';

		    	 $select3="SELECT  SUM(amount) from new_ad;";
		    $query4=mysqli_query($conn,$select3);
		    if($query4){
		    	
		    	while($res4=mysqli_fetch_array($query4))
		    	{
		    		 $webprof=$res4[0];
		    	}}   

		    	$select4="SELECT COUNT(*) FROM new_ad;";
		    $query5=mysqli_query($conn,$select4);
		    if($query5){
		    	
		    	while($res5=mysqli_fetch_array($query5))
		    	{
		    		 $adcounts=$res5[0];
		    	}}   




	}	

    ?>