<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<!-- Mobile Specific Metas
	================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<!-- Site Title -->
	<title>IEEE SLSYW CONGRESS 2018</title>
	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<!-- CSS
	================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="preload"></div>
	<div class="body-inner">



		<!-- HEADER SECTION STARTS-->
		<?php require_once 'process/common/headers/index.php'?>
		<!-- HEADER SECTION ENDS -->




		<!-- BANNER SECTION STARTS-->
        <?php require_once 'process/common/sections/banner.php'?>
		<!-- BANNER SECTION ENDS -->



		<!-- INTRO SECTION STARTS-->
        <?php require_once 'process/common/sections/intro.php'?>
		<!-- INTRO SECTION ENDS -->



		<!-- TIMELINE SECTION STARTS-->

		<!-- TIMELINE SECTION ENDS -->


		<!-- SPEAKERS SECTION STARTS-->
      
		<!-- SPEAKERS SECTION ENDS -->


		
		<!-- FACTS SECTION STARTS-->
        <?php require_once 'process/common/sections/facts.php'?>
		<!-- FACT SECTION ENDS -->
		
		
		<!-- GALLERY SECTION STARTS-->
      <?php require_once 'process/common/sections/gallery.php'?>
		<!-- GALLERY SECTION ENDS -->


		
		<!-- FACTS SECTION STARTS-->
        <?php require_once 'process/common/sections/facts.php'?>
		<!-- FACT SECTION ENDS -->
		
		

		<!-- PARTNERSHIP SECTION STARTS-->
        <?php require_once 'process/common/sections/partnership.php'?>
		<!-- PARTNERSHIP SECTION ENDS -->



		<!-- REG BG SECTION STARTS-->
        <?php require_once 'process/common/sections/regbg.php'?>
		<!-- REG BG SECTION ENDS -->



		<!--LATEST UPDATE SECTION STARTS-->
        <?php require_once 'process/common/sections/updates.php'?>
		<!-- LATEST UPDATE SECTION ENDS -->




		<!-- NEWSLETTER SECTION STARTS-->
        <?php require_once 'process/common/sections/newsletter.php'?>
		<!-- NEWSLETTER SECTION ENDS -->



		<!-- VENUE SECTION STARTS-->
        <?php require_once 'process/common/sections/venue.php'?>
		<!-- VENUE SECTION ENDS -->

     

		<!--FOOTER SECTION STARTS-->
        <?php require_once 'process/common/sections/footer.php'?>
		<!-- FOOTER SECTION ENDS -->


        <!-- FB PLUGIN STARTS-->
        <?php require_once 'process/common/custom/facebook.php'?>
        <!-- FB PLUGIN ENDS -->

        <!-- POPUP STARTS-->
        <?php require_once 'process/common/custom/popup.php'?>
        <!-- POPUP ENDS -->

        <!-- Javascript Files
        ================================================== -->
	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Countdown -->
	<script type="text/javascript" src="js/jquery.jCounter.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<!-- Color box for Popup-->
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<!-- Google Map -->
	<script type="text/javascript" src="maps.googleapis.com/maps/api/js_key_AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM.js"></script>
	<!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
	<!-- For latitude and longitude use http://www.latlong.net/ -->
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript">
		/* Event counter */
		$(".countdown").jCounter({
		  	date: '28 December 2018 12:00:00',
		  	fallback: function() { console.log("count finished!") }
		});
		/* Event map */
		var eventmap = {lat: 40.742964, lng: -73.992277};
    	$('.map')
      .gmap3({
      	zoom: 13,
        	center: eventmap,
        	mapTypeId : google.maps.MapTypeId.ROADMAP,
	      scrollwheel: false
      })
      .marker({
        position: eventmap
      })
      .infowindow({
        	position: eventmap,
        	content: "IEEE CONGRESS - SRI LANKA 2018"
      })
      .then(function (infowindow) {
        	var map = this.get(0);
        	var marker = this.get(1);
        	marker.addListener('click', function() {
         	infowindow.open(map, marker);
        	});
      });
	</script>
	<!-- Template custom -->
	<script type="text/javascript" src="js/custom.js"></script>
	</div><!-- Body inner end -->
</body>
</html>