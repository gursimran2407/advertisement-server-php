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
                        <h1 class="page-header">
                            Payment
                        </h1>
	<fieldset>
	<form action="payment.php" method="POST">
		<label for="card">Card Number:</label>
		<input type="text" accept="number" maxlength="16" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		<br>
		<label for="expiry">Expiry:</label>
		<select name="m1" id="month" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
			<option disabled selected>Month</option>
			<option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="July">July</option>
			<option value="Aug">Aug</option>
			<option value="Sept">Sept</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
		</select>
		<select name="y1" id="year" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
			<option disabled selected>Year</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
		</select>
		<br>
		<label for="cvv">CVV:</label>
		<input type="text" accept="number" maxlength="3" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		<br>
		<label for="name">Name On Card:</label>
		<input type="text" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		<br><br>
		<input type="button" value="Submit" name="s1" class="btn btn-primary">
	</form>
	</fieldset>
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

