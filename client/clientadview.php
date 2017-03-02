<?php 
session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Client Panel</title>
 <!-- Bootstrap Core CSS -->
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
                        <h1 class="page-header">
                            Welcome Client
                        </h1>

      <?php 

  $email = $SESSION['email'];
  include_once "../config.php";


  $select="SELECT new_ad.email,new_ad.target_url,new_ad.adname,new_ad.amount,new_ad.imagepath,advertiser_register.advertiser_name,advertiser_register.contact FROM new_ad INNER JOIN advertiser_register ON new_ad.email=advertiser_register.email WHERE new_ad.email=advertiser_register.email";
  $query=mysqli_query($conn,$select);
  echo "<div class='bs-example4' data-example-id='contextual-table' style='overflow-x:auto;'><table class='table table-striped table-hover table-bordered table-responsive'>
    <tr class='table info'>
      <th>S. No.</th>
      <th>Advetisement Name</th>
      <th>Banner</th>
      <th>Target Url</th>

      <th>Advertiser Detail</th>
      
      <th>Select</th>
    </tr>";
    $counter =0;
  while($res=mysqli_fetch_array($query))
  {$counter++;
  $email=$res['email'];
  $adname=$res['adname'];
  $amount='$'.$res['amount'];
  $imagepath='../advertiser/'.$res['imagepath'];
  $advname=$res['advertiser_name'];
  $advcontact=$res['contact'];
  $target = $res['target_url']
  ?>

    <tr><?php echo "
      <td>$counter</td>
      <td>$adname</td>
      <td><img src='$imagepath' class='img-thumbnail img-rounded img-responsive'></td>
      <td>$target</td>
      <td>Email:$email<br>
      Name:$advname<br>
      Contact:$advcontact<br>
      </td>
      
      <td>" ?> 
            <form action="htmlcodeclientgenerate.php" method="POST">
        <input type='checkbox' Name='c1[]' value='<?php echo $adname?>'>
       
<?php
      echo "</td>";
    ?>
    </tr>
    
 
<?php } ; ?>
 

</table>
</div>
<input type="submit" value="Submit" class="btn btn-primary">
      </form>


 



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

