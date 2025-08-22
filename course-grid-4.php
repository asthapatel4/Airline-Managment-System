<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>ORFINA - the most relaiable airways</title>  
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
						<li class="nav-item active dropdown">
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
								<a class="dropdown-item" href="blog-single.php">Business</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="teachers.php">Information</a></li>
						<li class="nav-item"><a class="nav-link" href="pricing.php">Booking</a></li>
						

					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Excess baggage<span class="m_1"></span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead"></p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

			<div class="row"> 
                <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/Luggage4.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Excess baggage</a></h2>
							</div>
							<div class="course-desc">
								<p>IndiGo Domestic Sector connecting to IndiGo international sector or vice versa: IndiGo's Free Baggage Allowance for International sector will be applicable
IndiGo Domestic Sector connecting to another airline to/from an international destination: 15 Kg per passenger (One piece only). Baggage in excess of 15 kgs will be subject to additional charges of INR 550 per kg. Additional pieces of Baggage will be subject to additional charges of INR 1000 per piece and additional charge of INR 550 per kg would be levied in case the weight exceeds 15 kgs.	</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
															</ul>
						</div>
					</div>
                </div><!-- end col -->
				<div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/Luggage1.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Lost baggage</a></h2>
							</div>
							<div class="blog-desc">
								<p>Customers are solely responsible for carriage of their hand bag / personal belongings. IndiGo is not liable for any loss / damage caused to customer's hand baggage / personal belongings. Any receipt of baggage without complaint on the termination of the journey shall be prima facie evidence that the baggage has been delivered correctly and in good condition. A customer who leaves the baggage delivery area without reporting a bag as missing or damaged to an IndiGo representative will be deemed to have received his/her bag correctly and in good condition.

</p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->	
            </div><!-- end row -->
			
			<hr class="hr3"> 
			
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/Luggage2.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Dangerous goods</a></h2>
							</div>
							<div class="course-desc">
								<p>Compressed gases - deeply refrigerated, flammable, non-flammable and poisonous such as butane oxygen, liquid nitrogen, aqualung cylinders and compressed gas cylinders
Corrosives such as acids, alkalis, mercury and wet cell batteries and apparatus containing mercury
Explosives, munitions, fireworks and flares, ammunition including blank cartridges, handguns, fire works, pistol caps
Flammable liquids and solids such as lighter refills, lighter fuel, matches, paints, thinners, fire-lighters, lighters.</p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
													</ul>
						</div>
					</div>
                </div><!-- end col -->
				<div class="col-lg-6 col-md-6 col-12">
                   <div class="course-item">
						<div class="image-blog">
							<img src="images/Luggage3.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Cabin baggage</a></h2>
							</div>
							<div class="course-desc">
								<p>Whether its called hand baggage, cabin bag or your carry-on luggage, all of these refer to the piece of baggage that will take onto the plane with you. This piece of baggage should generally be small enough to fit into the overhead compartment. To avoid any problems during your journey, please pay attention to all our instructions concerning baggage. As baggage requirements are different for every flight, you will find accurate details on your reservation information and the baggage information on your ticket.</p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->
				
			<div class="section-title row text-center">
                
				<h3>Current limits</h3>
				<p class="lead">Here are some nationl and international ratio.</p>
			</div>
		</div>
			<div class="image-blog">
						<img src="images/table.png" alt="" class="img-fluid">
					</div>
 
				
			
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