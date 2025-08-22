



<?php

require('login_connect.php');

if(isset($_POST['save']))
{
	$username=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
		
	
$emailquery="select * from user where email='$email'";

$query=mysqli_query($con,$emailquery);
$emailcount=mysqli_num_rows($query);

if($emailcount>0)
{
		echo "email already exist";
}
else
{
	if($password===$confirm_password)
	{
		$insertquery="INSERT INTO `user`( `name`, `email`, `mobile`, `password`, `confirm_password`) VALUES ('$username','$email','$mobile','$password','$confirm_password')";
						
		$iquery=mysqli_query($con,$insertquery);
	
			if($iquery)
						{
							echo " "; 
						}
						else
						{
							echo "could not insert record:".mysqli_error($con);
						}
	  
		if($iquery)
		{
			
			echo " ";
			}
		else
		{
			echo "no inserted";
			}
	}
else
		{
			echo "password are not matching";
		}
	}
}
	
    ?>


<?php 
include('login_connect.php');  //Database connection included
if (isset($_POST['login'])) {

    $username = $_POST['uname'];       //data of login table in sql
    $password = $_POST['password'];
    $qry = "SELECT * FROM `login` WHERE `uname`='$username' AND `password`='$password' ";
    $run = mysqli_query($dbcon,$qry);
    $row = mysqli_num_rows($run);
    if ($row<1) 
    {
        // not an admin, check registration table
        $email = $_POST['email'];
        $qry = "SELECT * FROM `registration` WHERE (`uname`= '$username' OR `email`='$email') AND `password` = '$password' ";
        $run = mysqli_query($dbcon,$qry);
        $row = mysqli_num_rows($run);
        if ($row<1) 
        {
            echo "password is incorrect";
        }
        else
        {
            $data = mysqli_fetch_assoc($run);
            $id  = $data['id'];
            echo "Your Id is " .$id;
        }
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id  = $data['id'];
        echo "Your Id is " .$id;
    }
}
?>







<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>ORFINA most reliable airways </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										login
									</button>
									 <footer>not register? <a href="login.php">click here to register </a></footer>
									
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="<?php $_PHP_SELF;?>" method="POST" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text" name="name">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email" name="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="mobile" name="mobile">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password" name="password">
								</div>
							</div>
														<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="confirm Password" type="password" name="confirm_password">
								</div>
							</div>
							 <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
       
							<div class="row">							
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1" name="save">
										Register
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
										 <footer>Already a logged-in? <a href="login.php">Login here</a></footer>
									
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Services </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.php">Food & beverage </a>
								<a class="dropdown-item" href="course-grid-3.php">Seat select </a>
								<a class="dropdown-item" href="course-grid-4.php">Access baggage </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Classes </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href=".php">Economy </a>
								<a class="dropdown-item" href="blog-single.php">Business </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="teachers.php">Information</a></li>
						<li class="nav-item"><a class="nav-link" href="pricing.php">Booking</a></li>
						
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/aimg-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>Orfina </strong> airways</h2>
										<p class="lead">We work hard to make your flight pleasant. </p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Orfina <strong>airways</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">We work hard to make your flight pleasant. </p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/bg3.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Orfina </strong>Airways</h2>
										<p class="lead" data-animation="animated fadeInLeft">We work hard to make your flight pleasant. </p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>ABOUT USE</h3>
                    <p class="lead">orfina airline is a company that provides air trasport services for travelling passengers.</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>PURPOSE</h4>
                        <h2>OUR MOTO TO REACH AND FULFILL YOUR GOALS</h2>
                        <p><h3>An transport passengers and their luggage from one point to another.just like any other service industy, the airlines industy provide  a servise for a set price.</h3></p>

                        <p><h3> airline  industry,  the  business  of  transporting  payig  passengers  and  freight  by  air  along  regularly  scheduled  routes,  typically  by  airplanes  but  also  helicopter.</h3> </p>

                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/img_16.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/bimg.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>TRANSPORT AVIATION </h2>

                        <p><h3> we provide aviation for our customer's relaxation.</h3> </p>

                        <p><h3>there are few diffrent sector with three being the main pillars that 
                            up hold the aviation industry as whole: commercial, general and militry aviation</h3> </p>

                        

                               </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    
    <section class="section lb page-section">
		<!--<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">-->
                <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3></h3>
                    <p class="lead"></p>
                </div>
            </div><!-- end title -->
    
               <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
            
                 
                    <h2>Our history</h2>
                    <p><h3>Civil aviation in India, the world's third-largest civil aviation market as of 2020, 
                        traces its origin back to 1911, when the first commercial civil aviation flight took off from a polo ground 
                        in Allahabad carrying mail across the Yamuna river to Naini.</h3></p>
                        
                        
                      
                      
                      
                      
                      
                      
                      
                        <p><h3> Air India is India's national flag carrier after merging with 
                            Indian Airlines in 2007 and plays a major role in connecting 
                            India with the rest of the world.
                            IndiGo, Air India, Spicejet, Go First and Vistara,
                            AIX Connect are the major carriers in order of their market share.
                            These airlines connect more than 80 cities across 
                            India and also operate overseas routes after the liberalisation of Indian aviation. 
                            Several other foreign airlines connect Indian cities with other major cities across the globe.
                            However, a large section of country's air transport potential remains untapped, even though 
                            the Mumbai–Delhi air corridor is ranked the world's third-busiest route.</h3> </p>



                </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <video src="images/video.MP4" alt="" class="img-fluid img-rounded">
                    </div>
            </div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2023</h2>
								<p>The year 2023 is definitely going to be an important year for every other sector but for the aviation industry of India, it will be a time of numerous milestones Indian economy.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2020</h2>
								<p>2020 has been an interesting year for the aviation industry, to say the least. From a complete flight ban for two months to an impressive recovery, the year has seen some big aviation stories.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2010</h2>
								<p>May 22, 2010 At the time of accident, (NACIL-A) continued to depute pilots not qualified on Boeing 737-800 aircraft as Post Holders to supervise various functions of orfina airways.

</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2000
                                    
                                </h2>
								<p>In 2000-01, only about 14 million Indians flew on a domestic flight. This increased by more than three-fold to over 45 million domestic passengers in 2009-10.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>1999</h2>
								<p>orfina airways help our nation during a low-level attack on Kosovo ,J-22 Orao crashes into a hill, killing its pilot.Yugoslavia also loses a MiG-29 destroyed in a landing accident at Ponikve Airbase.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>1997</h2>
								<p>indian Corps helicopters involved in Operation Silver Wake come under fire from small arms and a shoulder-launched missile in Albania. The United States temporarily suspends evacuation operations in Albania.
</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>1994</h2>
								<p>The Government of Colombia passes a law abolishing the Administrative Department of Civil Aeronautics  aviation authority. The change will go into effect on 1 February 1994.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>1989</h2>
								<p>CrownAir having started services in the winter of 1988–1989, ceased operations. View airlines from Canada. Futura International Airways, formed as CHIASA (Compania Hispano Irlandesa de Aviacion) in 1989, started operations. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">12000</p>
					<h3>Passengers</h3>
				</div><!-- end col -->

                
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">240</p>
					<h3>Flights</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">55</p>
					<h3>Years Completed</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Classes</h3>
                <p>There include First Class, Business Class, and Economy Class. Each airline’s policies and regulations differ, but overall, the cabin configuration will determine how many classes of service are offered. Here’s a guideline of how the different airline classes are broken down and how they render services to passengers in each location. </p>
            </div><!-- end title -->
            </div>
            </div>
            
            <div class="parallax section dbcolor" style="width:100%; height:100%;">
        <div class="container">
            <ul>
			<div class="airline-interlinking-container">
				<h2 class="airline-interlinking-heading">Popular Domestic Airlines</h2>
				<div class="airline-interlinking-list-cntnr">
					<div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp animated animated" style="visibility: visible;display: flex;">
					<div class="airline-interlinking-list">
						<img class="airline-img" src="images/indigo.jpg" height="80" width="80" alt="Indigo Airlines">
					<a href="https://www.goindigo.in/">Indigo Airlines</a>
				</div>
				
					<div class="airline-interlinking-list">
					<img class="airline-img" src="images/AI.jpg" height="80" width="80" alt="Air India">
					<a href="https://www.airindia.com/" class="airline-name">Air India</a>
					
				</div>
					<div class="airline-interlinking-list">
						<img class="airline-img" src="images/IX.jpg" height="80" width="80" alt="Air India Express">
					<a href="https://www.airindiaexpress.com/home" class="airline-name">Air India Express</a>
				</div>
					<div class="airline-interlinking-list">
						  
					<img class="airline-img" src="images/aa.jpg" height="80" width="80" alt="Air Asia India">
					<a href="https://www.airasia.co.in/home" class="airline-name">Air Asia India</a>
				</div>
				
					<div class="airline-interlinking-list">
						<img class="airline-img" src="images/akasa.jpg" height="80" width="80" alt="Akasa Air">
					<a href="https://www.akasaair.com/" class="airline-name">Akasa Air</a>
				</div>
					<div class="airline-interlinking-list">
						<img class="airline-img" src="images/G8.jpg"height="80" width="80" >
					<a href="https://www.flygofirst.com/" class="airline-name">Go first fly Airline</a>
				</div>
					<div class="airline-interlinking-list">
						<img class="airline-img" src="images/SG.jpg" height="80" width="80" alt="SpiceJet">
                    <a href="https://www.spicejet.com/" class="airline-name">SpiceJet</a>
                </div>
				</div>

                </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
   
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> India is the third-largest civil aviation market in the world as of 2023. It recorded an air traffic of 131 million passengers in 2016, of which 100 million were domestic passengers.
                         The largest airline by international passenger traffic was Orfina Airways which transported over 10 million passengers in and out of India in 2016, followed by Air India and AI Express (8.8 million). In third place was Emirates (5.46 million), 
                         which is the largest foreign airline operating in India.</p>   
												
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							 <li><a href="food.php">Services</a></li>
							<li><a href="">Classes</a></li>
                            <li><a href="info.php">Information</a></li>
							<li><a href="">Booking</a></li>
							
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@orfina.com</a></li>
                            <li><a href="#">www.orfina.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 </li>
                            <li>+1234567890</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

  
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>