<?php session_start(); ?>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Admin <i class="fa fa-user"></i><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                     
                        <li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>  
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           <?php include 'sidebar.php'; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                     <h1 class="page-header">
                         Advertiser Payment Details
                        </h1>
<?php 
  session_start();
  include_once "../config.php";
  $select="SELECT * from new_ad ORDER BY email";
  

  $query=mysqli_query($conn,$select);
  echo "<div class='bs-example4' data-example-id='contextual-table' style='overflow-x:auto;'><table class='table table-striped table-hover table-bordered table-responsive'>
    <tr class='table info'>
      <th>S. No.</th>
      <th>Advertiser Email</th>
      <th>Advetisement Name</th>
      <th>Banner</th>
      
      <th>Startdate</th>
      <th>Enddate</th>
      
      <th>Amount</th>
  
    </tr>";
    $counter=0;
  while($res=mysqli_fetch_array($query))
  {
  $counter++;
  $ademail=$res['email'];
  $adname=$res['adname'];
  $imagepath='../advertiser/'.$res['imagepath'];
  $startdate=$res['startdate'];
  $enddate=$res['enddate'];
  $height=$res['ad_height'];
  $width=$res['ad_width'];
  $amount='$'.$res['amount'];
  $target = $res['target_url'];
  $clickcount = $res['click_count'];
 

  ?>

    <tr>
    <?php echo "
      <td>$counter</td>
      <td>$ademail</td>
      <td>$adname</td>
      <td><img src='$imagepath'></td>
   
      
      <td>$startdate</td>
      <td>$enddate</td>
 
      <td>$amount</td>
      ";
?>
    </tr>
    
 
<?php } ; ?>
 

</table>
</div>
     
                   
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
 