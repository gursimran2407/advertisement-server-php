<?php 
session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel='stylesheet' type='text/css' />


    <!-- Graph CSS -->
<link href="../css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Nav CSS -->
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="../js/d3.v3.js"></script>
<script src="../js/rickshaw.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Adserver</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-nav navbar-right">
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $email?> <i class="fa fa-user"></i><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                     
                        <li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>  
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include 'sidebar.php' ?>
           
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Upload New Ad
                        </h3>

                        <!--yooyshuru-->
            <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
<div class='bs-example4' data-example-id='contextual-table' style='overflow-x:auto;'>
	<form  action="adupload.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <fieldset>
	<div class="form-group">
		
		
			<label for="adname" >  Enter Name of the Advertisement</label>
			<input type="text" name="adname" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
			<hr>


			<label for="site">  Enter Your Website Name</label>
			<input type="text" name="site" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
			<hr>
			<label for="start">  Enter Ad Starting date</label>
			<input type="date" name="start" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
			<hr>

			<label for="end">  Enter Ad Ending date</label>
			<input type="date" name="end" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
			<hr>

			<label for="target">  Enter Target Url</label>
			<input type="text" name="target" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
			<hr>
 
			<label for="end">  Upload the banner to be displayed</label>
			<input type="file" name="file" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" > The file should be of jpeg/jpg/gif format and filesize should be less than 5MB.

			<hr>
			<input type="submit" name="submit" value = "Submit" class="btn btn-primary">

	
	
	      
                    </div>
                </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div> </fieldset>
    </form>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
session_start();
if (isset($_POST['submit'])) 
{
include_once '../config.php';
$email = $_SESSION['email'];
$adname = $_POST['adname'];
$website = $_POST['site'];	
$startdate = $_POST['start'];	
$enddate = $_POST['end'];	
$target = $_POST['target'];

 $name = $_FILES['file']['name'];
 $size = $_FILES['file']['size'].' bytes';
  $type = $_FILES['file']['type'];
 $tmp_name = $_FILES['file']['tmp_name'];


$max_size = 5000000;
//DATE

$date1=date_create($startdate);
$date2=date_create($enddate);
$diff=date_diff($date1,$date2);

date_default_timezone_set('Asia/Calcutta');
$datetime = date('d-m-Y h:i:s a', time());


$days =$diff->days;

//amount cal
$amount =  $days*5;

$select="select email from new_ad where adname='$adname'";
$query = mysqli_query($conn, $select);
$res=mysqli_fetch_array($query);
if($res)
{
	echo "<script>
			alert('Adname Already Exist')
			</script>";
}
else if(isset($name))
{
	if(!empty($name)){
		 if ($type=='image/jpg'||$type=='image/jpeg' || $type=='image/gif' && $size<$max_size) {
			
		
		$location ='uploads/';
		$imagepath = $location.$datetime.$name;
		  

		if(move_uploaded_file($tmp_name, $imagepath)){
			$sizes = getimagesize($imagepath);
		   $height= $sizes[1];
		  $width= $sizes[0];
			$insert = "INSERT INTO new_ad VALUES ('$email','$adname','$website','$imagepath','$startdate','$enddate','$amount','$target','$height','$width')";

			$query = mysqli_query($conn, $insert);

			echo "<script>
			alert('File Uploaded Successfully')
			window.location = 'advertiserpanel.php'
			</script>";

		}
	}
	else
	{
		echo 'Choose File with size less than 5mb';
	}}
}
}





?>