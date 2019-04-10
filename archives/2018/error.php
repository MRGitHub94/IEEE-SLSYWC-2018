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
	<title>Aceess Denied | IEEE SLSYW Congress 2018</title>
	<!--Favicon-->
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
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
	
	
		
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116916933-4"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116916933-4');
  </script>

</head>
<body>
	<div class="body-inner">

		<!-- HEADER SECTION STARTS-->
		<?php require_once 'process/common/headers/error.php'?>
		<!-- HEADER SECTION ENDS -->

	<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/contact.jpg)">
		<!-- Subpage title start -->
		<div class="page-banner-title">
        	<div class="text-center">
	        <strong>	<font size="35" color="white">401: Access Denied Error Encountered</font> </strong>
         </div>
      </div><!-- Subpage title end -->
	</div><!-- Banner end -->



        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row">
                    <div class="error-page text-center">
                        <div class="error-code">
                            <h2><strong>401</strong></h2>
                        </div>
                        <div class="error-message">
                            <h3>Oops... You are not authorized to access this area!</h3>
                            <h4>If you feel this is an error occurred by the system, contact IEEE SLSYWC webmaster to report <a href="mailto:manoranjana@ieee.org"><i>here.</i></a> </h4>
                        </div>
                        <div class="error-body">
                          If you made a mistake, try using the button below to go to home page. <br>
                            <a href="https://sywc.ieee.lk" class="btn btn-primary">Back to Home Page</a>
                        </div>
                    </div>
                </div><!-- Content row -->
            </div><!-- Container end -->
        </section><!-- Main container end -->

        <!--FOOTER SECTION STARTS-->
        <?php require_once 'process/common/sections/footer.php'?>
        <!-- FOOTER SECTION ENDS -->


        <!-- FB PLUGIN STARTS-->
        <?php require_once 'process/common/custom/facebook.php'?>
        <!-- FB PLUGIN ENDS -->

        <!-- Javascript Files
        ================================================== -->
	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<!-- Google Map -->
	<script type="text/javascript" src="maps.googleapis.com/maps/api/js_key_AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM.js"></script>
	<!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
	<!-- For latitude and longitude use http://www.latlong.net/ -->
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript">
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
        	content: "NYC Seminar and Conference Center, New York"
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