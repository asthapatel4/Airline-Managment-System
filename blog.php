<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>ORFINA - most reliable airways</title>  
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
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
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
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Services </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<a class="dropdown-item" href="course-grid-2.php">Food & beverage</a>
								<a class="dropdown-item" href="course-grid-3.php">Seat select</a>
								<a class="dropdown-item" href="course-grid-4.php">Access baggage</a>
							</div>
						</li>
						<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Classes </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">Economy</a>
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
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Classes<span class="m_1"></span></h1>
		</div>
	</div>
	<div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>ECONOMY CLASS</h3>
                    <p class="lead"></p>
                </div>
            </div><!-- end title -->
    
    <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>Our services</h4>
                        <h2></h2>
                        <p><h3>Economy class is another term for the airplane’s main cabin and is sometimes referred to as coach.almost all airlines have economy class. Airlines trying to provide much cheaper flight tickets for passengers are referred to as low-cost airlines.</h3></p>
                        <p><h3>Meet the travel membership saving you hundreds of dollars on flights. We’ve helped millions travel and experience the world without breaking the bank..</h3></p>
                        <p><h3>Economy class, also called third class, coach class, steerage, or to distinguish it from the slightly more expensive premium economy class, standard economy class or budget economy class, is the lowest travel class of seating in air travel.</h3></p>

                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/window1.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/img_75.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2></h2>
                        <p><h3>Economy class, also called third class, coach class, steerage, or to distinguish it from the slightly more expensive premium economy class, standard economy class or budget economy class, is the lowest travel class of seating in air travel, rail travel, and sometimes ferry or maritime travel.
.</h3></p>

                        <p><h3>Economy class seats usually recline and have a fold-down table. Seat pitch ranges from 28 to 36 inches (71 to 91 cm), usually 30–32 in (76–81 cm), and 30 to 36 in (76 to 91 cm) for international economy class seats. </h3></p>

                                           </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
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
							<li><a href="contact.php">Contact</a></li>
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