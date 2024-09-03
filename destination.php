<!DOCTYPE HTML>

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
					<div id="gtco-logo"><a href="index.php">YATHRA<em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="active"><a href="destination.html">DESTINATION</a></li>
					     <?php 
if (isset($_COOKIE['name'])) {
    echo '<li class="has-dropdown">';
    echo '<a href="busdtls.html">ADD DETAILS</a>';
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
        <li><a href="login3.php">BUSOWNERS</a></li>
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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/bgsamp2.)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Destination</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Trip With Your Favourite Destination</h2>
					
				</div>
			</div>
			<div class="row">

		    <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/tvpm.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>THIRUVANANTHAPURAM</u></h3>
                  <p class="card-text">The capital city of the Keralam.Filled with lot of natural beauty.Thiruvananthapuram is the largest city in Keralam</p>
                  <a href="https://en.wikipedia.org/wiki/Tourism_in_Thiruvananthapuram" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>

          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/kollam.jpg" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>KOLLAM</u></h3>
                  <p class="card-text">Kollam, nestled in Kerala's southwestern beauty, beckons with tranquil backwaters, historic charm, and vibrant culture.</p>
                  <a href="https://en.wikipedia.org/wiki/Kollam_district" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>


         <br>
         <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/pathanamthitta.png"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>PATHANAMTHITTA</u></h3>
                  <p class="card-text">Pathanamthitta, Kerala's verdant heart, sacred temples, and serene rivers. Home to the famous Sabarimala pilgrimage, it offers spiritual solace.</p>
                  <a href="https://en.wikipedia.org/wiki/Pathanamthitta#Tourism" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>

          <br>
         <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/alappuzha.jpg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>ALAPUZHA</u></h3>
                  <p class="card-text">Alappuzha,the "Venice of the East," is famous for its enchanting backwaters and houseboat cruises, offering a tranquil and picturesque escape in Kerala, India.</p>
                  <a href="https://en.wikipedia.org/wiki/Alappuzha#tourism" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>

          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/kottayam.jpg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>KOTTAYAM</u></h3>
                  <p class="card-text">Kottayam, a charming town in Kerala,serene backwaters and historic churches, making it a perfect destination of natural beauty and cultural heritage.</p>
                  <a href="https://en.wikipedia.org/wiki/Kottayam#tourism" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>


          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/idukki.jpg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>IDUKKI</u></h3>
                  <p class="card-text">Idukki, nestled in Kerala's Western Ghats, is a paradise for nature enthusiasts and the iconic Idukki Arch Dam, making it a haven for eco-tourism and adventure seekers.</p>
                  <a href="https://en.wikipedia.org/wiki/Idukki_district#Tourism" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>


          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/ernakulam.jpg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>ERNAKULAM</u></h3>
                  <p class="card-text">Ernakulam,the commercial capital of Kerala,offers a vibrant mix of modernity and tradition, making it a diverse and dynamic tourist destination.</p>
                  <a href="https://en.wikipedia.org/wiki/Ernakulam_district#Tourism" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>

          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/thrissur.jpg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>THRISSUR</u></h3>
                  <p class="card-text">Thrissur, the cultural capital of Kerala, is renowned for its grand festivals, historic temples, providing a rich and immersive cultural experience for visitors.</p>
                  <a href="https://en.wikipedia.org/wiki/Thrissur_district#tourism" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>

          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/palakkad2.jpeg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>PALAKKAD</u></h3>
                  <p class="card-text">Palakkad, a serene district in Kerala, is blessed with lush green landscapes and ancient forts, offering a peaceful retreat for nature lovers and history enthusiasts.</p>
                  <a href="https://en.wikipedia.org/wiki/Palakkad_district#tourism" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>

          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/malappuram.jpg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>MALAPURAM</u></h3>
                  <p class="card-text">Malappuram,the northern part of Kerala,is known for its historic mosques and a rich cultural heritage,making it blend of tradition and natural beauty.</p>
                  <a href="https://en.wikipedia.org/wiki/Malappuram_district#Places_of_interest" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>


          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/kozhikode.jpg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>KOZHIKODE</u></h3>
                  <p class="card-text">Kozhikode,known for its historic significance and serene beaches, invites visitors to explore its rich maritime history and cultural diversity in the heart of Kerala, India.</p>
                  <a href="https://en.wikipedia.org/wiki/List_of_tourist_attractions_in_Kozhikode" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>

          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/wayanad.jpg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>WAYANAD</u></h3>
                  <p class="card-text">Wayanad,a lush and scenic district in Kerala,is a nature lover's paradise with its verdant forests, picturesque hills, and exotic wildlife and adventurous escape amidst the Western Ghats.</p>
                  <a href="https://en.wikipedia.org/wiki/Tourist_attractions_in_Wayanad" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>


          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/kannur.jpg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>KANNUR</u></h3>
                  <p class="card-text">Kannur,situated along Kerala's pristine coastline, offers a unique blend of beaches,historic forts, vibrant art forms,and a rich cultural heritage,makes a diverse and enriching travel experience.</p>
                  <a href="https://en.wikipedia.org/wiki/Tourist_attractions_in_Kannur" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>


          <div class="col-md-6">
            <!-- First Card -->
            <div class="card" style="width: 30rem;">
                <img src="images/kasargod.jpg"width="490" height="320" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title"><u>KASARGOD</u></h3>
                  <p class="card-text">Kasargod,nestled in Kerala's northernmost reaches, is known for its historic forts, and vibrant cultural traditions,making it offbeat destination for travelers looking to explore Kerala's hidden treasures.</p>
                  <a href="https://en.wikipedia.org/wiki/List_of_tourist_attractions_in_Kasaragod" class="btn btn-primary">DETAILS</a>
                </div>
              </div>
          </div>
         </div>
		</div>
	</div>
	

	
	

	<footer id="gtco-footer" role="contentinfo" >
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

