<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AD Server</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <style>
.dropbtn {
    
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #032731;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">


    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Ad Server</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Advertisements</a>
                    </li>
                   
                    <li class="page-scroll">
                        <a href="#contact">Pricing</a>
                    </li>
                     <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>

                    <li class="page-scroll">
                    <div class="dropdown">
                              <button onclick="myFunction()" class="dropbtn">Login</button>
                              <div id="myDropdown" class="dropdown-content">
                                <a href="login.php">Login</a>
                                <a href="admin/adminlogin.php">Admin Login</a>
                                
                              </div>
                            </div>
                        
                    </li>
                     <li class="page-scroll">
                        <div class="dropdown">
                              <button onclick="myFunction1()" class="dropbtn">Sign Up</button>
                              <div id="myDropdown1" class="dropdown-content">
                                <a href="advertiser/adsignup.php">Advertiser Signup</a>
                                <a href="client/clientsignup.php">Client Signup</a>
                                
                              </div>
                            </div>

                    </li>
                    <script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Ad Server</span>
                        <hr class="star-light">
                        <span class="skills">Advertiser -> Ads -> Client</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <?php 
    include_once 'config.php';
    $select= "SELECT * FROM new_ad ORDER BY RAND() LIMIT 6";
    $query = mysqli_query($conn,$select);
    

    while($res=mysqli_fetch_array($query))
    {
        $path='advertiser/'.$res['imagepath'];
        $imagename[] = $path;
        $adname[] =$res['adname'];
        $target[] ='http://'.$res['target_url'];
        $website[] =$res['sitename'];


        //print_r($imagename);
    }
    
      
    ?>
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Advertisements</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                            
                            </div>
                        </div>
                        <figure>
                        <a href="<?php echo $target[0]?>"><img src="<?php echo $imagename[0]?>"  class="img-responsive" alt=""></a>
                        <figcaption>Adname:-<?php echo $adname[0]?></figcaption>
                        <figcaption>Advertiser Website:-<?php echo $website[0]?></figcaption>

                        </figure>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                        
                            </div>
                        </div>
                       <figure>
                        <a href="<?php echo $target[1]?>"><img src="<?php echo $imagename[1]?>"  class="img-responsive" alt=""></a>
                        <figcaption>Adname:-<?php echo $adname[1]?></figcaption>
                        <figcaption>Advertiser Website:-<?php echo $website[1]?></figcaption>

                        </figure>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                           
                            </div>
                        </div>
                        <figure>
                        <a href="<?php echo $target[2]?>"><img src="<?php echo $imagename[2]?>"  class="img-responsive" alt=""></a>
                        <figcaption>Adname:-<?php echo $adname[2]?></figcaption>
                        <figcaption>Advertiser Website:-<?php echo $website[2]?></figcaption>

                        </figure>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                
                            </div>
                        </div>
                      <figure>
                        <a href="<?php echo $target[3]?>"><img src="<?php echo $imagename[3]?>"  class="img-responsive" alt=""></a>
                        <figcaption>Adname:-<?php echo $adname[3]?></figcaption>
                        <figcaption>Advertiser Website:-<?php echo $website[3]?></figcaption>

                        </figure>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                             
                            </div>
                        </div>
                     <figure>
                        <a href="<?php echo $target[4]?>"><img src="<?php echo $imagename[4]?>"  class="img-responsive" alt=""></a>
                        <figcaption>Adname:-<?php echo $adname[4]?></figcaption>
                        <figcaption>Advertiser Website:-<?php echo $website[4]?></figcaption>

                        </figure>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                            
                            </div>
                        </div>
                   <figure>
                        <a href="<?php echo $target[5]?>"><img src="<?php echo $imagename[5]?>"  class="img-responsive" alt=""></a>
                        <figcaption>Adname:-<?php echo $adname[5]?></figcaption>
                        <figcaption>Advertiser Website:-<?php echo $website[5]?></figcaption>

                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Pricing Section -->
    <section id="contact">
        <div class="container">
           <div class="row">
               <h2 align="center">Pricing</h2>
               <hr class="star-light">
                <div class="col-lg-4 col-lg-offset-2">
                    <h1>Advertiser</h1>
                    <p>Currently for uploading ads, the price is <i><b>$5</b></i> per day. The pricing may change whenever necessary.</p>
                </div>
                <div class="col-lg-4">
                    <h1>Client</h1>

                    <p>Currently a client can earn upto <i><b>$0.75</b></i> per click for an advertiserment of his/her choice. The pricing may change whenever necessary.</p>
                </div>
                
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Ad serving describes the technology and service that places advertisements on web sites. Ad serving technology companies provide software to web sites and advertisers to serve ads, count them, choose the ads that will make the website or advertiser most money, and monitor progress of different advertising campaigns.</p>
                </div>
                <div class="col-lg-4">
                    <p>Maximize yield with our robust ad serving platform designed to optimize the value of each ad impression. Precisely manage inventory and ad delivery on any platform using cutting-edge forecasting, targeting and big data reports.</p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location And Contact</h3>

                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                             <p><b>Email:-</b>gursimran81@gmail.com, djhack96@gmail.com
                            <br><b>Phone:-</b>+91-9781055155, 9478925795</p>

                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Ad Server</h3>
                        <p>Ad serving describes the technology and service that places advertisements on web sites.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Adserver 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
