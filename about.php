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
						<li class="nav-item active"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link -toggle" href="#" id="dropdown-a" data-toggle="dropdown">Services </a>
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
			<h1>About Us<span class="m_1"></span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Types of flights</h3>
                    <p class="lead">Buoyant flight, Aerodynamic flight& Ballistic flight.</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>Meet & Greet services</h4>
                        <h2>Baggage</h2>
                        <p><h3>Baggage allowance for each airlines various according of the policies.</h3></p>
                        <p><h3>Do not carry pointed edged or sharp object in your cabin. chemical and toxic substance of any kind  are prohibited from being carried in your baggage.</h3></p>
                        <p><h3>In some cases customer wants to carry more luggage ! so at that time customer have to pay extra cost to airways.</h3></p>

                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/img_63.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/food13.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Flight meal</h2>
                        <p><h3>Airline food is a served to passengers on board a commercia airliner. these meals are prepared by specialist airline catering services  .</h3></p>

                        <p><h3> Quality and quantity across diffrent airline companies and classes of travel. they range from a simple snake or beverage in short-haul economy class to a seven-course meal in first class long-haul flights .</h3></p>

                                           </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div class="hmv-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i class="flaticon-achievement"></i></div>
						<h3>Mission</h3>
						<div class="tr-pa">M</div>
						<p>
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i class="flaticon-eye"></i></div>
						<h3>Vision</h3>
						<div class="tr-pa">V</div>
						<p>Encompassing description The vision statement of Indigo Airlines should be brief but should be holistic in nature. This means that the visions statement should be complete in its description and information of what the company desires, and how it plans to achieve its long term goals strategically.		</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i class="flaticon-history"></i></div>
						<h3>History</h3>
						<div class="tr-pa">H</div>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam eligendi expedita, provident cupiditate in excepturi.</p>
					</div>
				</div>
			</div>
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