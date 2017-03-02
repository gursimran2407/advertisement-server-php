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
                    Client Payment Details
                        </h1>
                    
<?php 
  session_start();
  include_once "../config.php";

  $select="SELECT DISTINCT adname,click_count,client_email FROM click_count ORDER BY client_email";
  $query=mysqli_query($conn,$select);
  
    echo "
    <div class='bs-example4' data-example-id='contextual-table' style='overflow-x:auto;'><table class='table table-striped table-hover table-bordered table-responsive'>
    <tr class='table info'>
      <th>S. No.</th>
      <th>Email</th>
      <th>Advetisement Name</th>
  
      <th>Click Count</th>
      <th>Payment (Calculated as $0.75 for one click)</th>


    </tr>";
    $counter =0;
  while($res=mysqli_fetch_array($query))
  {$counter++;
  $email=$res['client_email'];
  $adname=$res['adname'];
  //$amount='$'.$res['amount'];
  $imagepath='../advertiser/'.$res['imagepath'];
  $click = $res['click_count'];
  $payment=$click*0.75;
  //$advname=$res['advertiser_name'];
  //$advcontact=$res['contact'];
  ?>

    <tr><?php echo "
      <td>$counter</td>
      <td>$email</td>
      <td>$adname</td>
 
      <td>$click</td>
      <td>$$payment</td>
      ";
    ?>
    </tr>
    
 
<?php } ; ?>
 

</table>
<div class="graphs">
      <div class="graph_box">
      <div class="graph_box1">
      <div class="col-md-4 grid_2"><div class="grid_1">
        <h3>Bar</h3>
        <canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
      </div></div>
</div>

<script>
      var barChartData = {
      labels : ['January','February','March','April','May','June','July'],
      datasets : [
        {
          fillColor : '#ef553a',
          strokeColor : '#ef553a',
          data : [65,59,90,81,56,55,40]
        },
        {
          fillColor : '#00aced',
          strokeColor : '#00aced',
          data : [28,48,40,19,96,27,100]
        }
      ]
      
    };
    new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
      </script>

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
