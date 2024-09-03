<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>YATHRA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style type="text/css">
		.logout-form {
    		display: inline; /* Display the form inline with the list items */
		}

.logout-button {
    background-color: transparent; /* Red background color */
    color: #fff; /* White text color */
    border: none; /* Remove the button border */
    padding: 5px 10px; /* Add padding to the button */
    border-radius: 5px; /* Add rounded corners to the button */
    cursor: pointer; /* Change cursor to a pointer on hover */
}

.logout-button:hover {
    background-color: #cc0000; /* Darker red background color on hover */
}

	</style>
   </head>
	<body>

		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">YATHRA <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="destination.php">DESTINATION</a></li>
						<?php 
if (isset($_COOKIE['name'])) {
    echo '<li class="has-dropdown">';
    echo '<a href="busdtls.php">ADD DETAILS</a>';
    echo '</li>';		
} else {
    echo '<li class="has-dropdown">';
    echo '<a href="login3.php">ADD DETAILS</a>';
    echo '</li>';
}
?>
<li class="has-dropdown">
    <a href="#">ACCOUNT</a>
    <ul class="dropdown">
        <li><a href="login.php">ADMIN</a></li>
        <li><a href="login2.php">PASSENGER</a></li>
        <?php 
			if (isset($_COOKIE['name'])) {
				echo '<li><a href="busdash.php">BUSOWNER</a></li>';
			} else {
				echo '<li><a href="login3.php">BUSOWNER</a></li>';
			}
		
		
		?>
    </ul>
</li>
<li><a href="feedbackform.php">FEEDBACK</a></li>
<?php 
if (isset($_COOKIE['name'])) {
    $user_id = $_COOKIE['name'];
    // Perform actions that a logged-in user can do
    echo '<li><form method="post" action="index.php" class="logout-form">';
    echo '<input type="submit" name="logout" value="Logout" class="logout-button">';
    echo '</form></li>';


                            } 

                            if (isset($_POST['logout'])) {
                            	if (isset($_POST['logout'])) {
                                // Set the expiration time of the cookie to a time in the past to delete it
                                setcookie("name", "", time() - 3600, "/");
                                header("Location: index.php"); // Redirect to the login page after logout
                                exit;
                            }
                            }
                           ?>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/logo1.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>BOOK YOUR TICKETS EASILY FROM HERE...</h1>	
						</div>
					   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Size Example</title>
</head>
<body>
    <button style="padding: 15px 30px; font-size: 18px;"><a href="ticket.php">SEARCH OR BOOK TICKETS</a></button>
</body>



                            
                                 </div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>How It Works</h2>
					<p>Yathra is committed to providing a seamless, stress-free booking experience. With its extensive bus operator network, user-friendly interface, real-time information, and customer support, you can trust Yathra to make your bus ticket booking process convenient and reliable.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>STRESS FREE</h3>
						<p> Say goodbye to long lines and the hassle of booking bus tickets at the last minute.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>SATISFACTION</h3>
						<p>Join thousands of satisfied travelers who've discovered the ease and convenience of booking through Yathra</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>SAFETY</h3>
						<p> Embark on your journey with confidence, and let Yathra be your bus ticket booking companion.</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	
	
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>Yathra is a website for your local bus travel.You can easily connect with us with various devices.A real travel pranter</p>
					</div>
				</div>

				
				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="feedbackform.php"><i class="icon-phone"></i> +91 0000000000</a></li>
							<li><a href="feedbackform.php"><i class="icon-mail2"></i> yathra@gmail.com</a></li>
							<li><a href="feedbackform.php"><i class="icon-chat"></i> FEEDBACK</a></li>
						</ul>
					</div>
				</div>

			</div>

	
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

