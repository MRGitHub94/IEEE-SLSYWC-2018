<?php 
 session_start();
	if(!isset($_SESSION['uid'])){
  header("Location:login_error");
}
  $uid = $_SESSION['uid'];

?>



<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://sywc.ieee.lk/images/favicon.png">

    <title>Dashboard | IEEE SLSYWC 2018 Invitations</title>

    <!-- Bootstrap core CSS -->
    <link href="assests/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="./assests/dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
	
	<link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
	
	<link rel="stylesheet" type="text/css" href="resources/demo.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>


	<script type="text/javascript" language="javascript" class="init">
	

$(document).ready(function() {
	$('#mytable').DataTable();
} );


	</script>
      </head>  

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">IEEE SLSYWC '18'</a>
     <div class="form-control form-control-dark w-100"> <marquee  scrollamount='5'><font color="#D1CECE">You have accessed to a restricted area.</marquee></font> </div>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php"><strong>  <?php 
	
			echo 'Logout ('.$_SESSION['username']; echo')'
		  ?></strong></a>
        </li>
		  
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
                        <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="https://sywc.ieee.lk/invitation/dashboard/ieee-student-sb">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  IEEE Student Members (via Branch) <span class="sr-only">(current)</span>
                </a>
              </li>
				
				<li class="nav-item">
                <a class="nav-link" href="https://sywc.ieee.lk/invitation/dashboard/non-ieee-student-sb">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Non-IEEE Student Members (via Branch) <span class="sr-only">(current)</span>
                </a>
              </li>
				
				<li class="nav-item">
                <a class="nav-link" href="https://sywc.ieee.lk/invitation/dashboard/ieee-student-direct">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                   IEEE Student Members (Direct) <span class="sr-only">(current)</span>
                </a>
			 </li>
				
			<li class="nav-item">
                <a class="nav-link" href="https://sywc.ieee.lk/invitation/dashboard/non-ieee-direct">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                   Non-IEEE Members (Direct) <span class="sr-only">(current)</span>
                </a>
			 </li>
				
					
			<li class="nav-item">
                <a class="nav-link" href="https://sywc.ieee.lk/invitation/dashboard/ieee-yp-direct">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                   IEEE YP Members (Direct) <span class="sr-only">(current)</span>
                </a>
			</li>
		
				
        
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2"><strong><font color="#D8090D">IEEE SLSYWC 2018 | INVITATIONS</font></strong> </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
				
			
				  
	  
				  
              </div>
            </div>
          </div>
			
	<div>
      
            <table cellspacing="100">
              <thead>
				  
<tr><th align="left"  width="72%"><h2>Invitations Dashboard</h2> </th>
	
	<th width=""><?php
date_default_timezone_set("Asia/Colombo");
echo "<font color='#0004A9'>Local Server Time: " . date("h.ia")." (Colombo, Sri Lanka)</font>";
?> </th> </tr>
				 
				</thead>
		
		 
		</table>
				
		<hr>
		 <br>
				  
				  
        <div class="container">
			
				
			
  <div class="row">
   
<div class="col-sm-12">
 <button onclick="window.location.href='ieee-student-sb'" type="button" class="btn btn-primary btn-lg btn-block">Send Invitations to IEEE Student Members (via Branch)</button>
	  </div>
	  </div>
		
	  
	  	<hr>
	   <div class="row">
	  <div class="col-sm-12">
 <button onclick="window.location.href='non-ieee-student-sb'" type="button" class="btn btn-primary btn-lg btn-block">Send Invitations to Non-IEEE Student Members (via Branch)</button>
	  </div>
	  
	  </div>
			
			<hr>
	  
	   <div class="row">
		   
	  <div class="col-sm-12">
  <button onclick="window.location.href='ieee-student-direct'" type="button" class="btn btn-primary btn-lg btn-block">Send Invitations to IEEE Student Members (Direct)</button>
	  </div>
		   
		</div>
		   
		   
		   	<hr>
		 <div class="row">	
	  <div class="col-sm-12">
  <button onclick="window.location.href='non-ieee-direct'" type="button" class="btn btn-primary btn-lg btn-block">Send Invitations to Non-IEEE Members (Direct)</button>
	  </div>
	  
	  
  </div>
			
			<hr>	
	
   <div class="row">
		   
	  <div class="col-sm-12">
  <button onclick="window.location.href='ieee-yp-direct'" type="button" class="btn btn-primary btn-lg btn-block">Send Invitations to IEEE YP Members (Direct)</button>
	  </div>
	
	  
  </div>
		
			
			</div>
			
			
			
			
			
		
	</div>
        </main>
      </div>
    </div>
		
		</div>
	  
	  <hr>
	  <div class="container">
	
		  <br><br>
		  
		  
  <footer>
	 <center> <font color="#616161"><p>Copyright © Smart Valley 2018.</p> </font> </center>
	   
	  </footer>
	  
	  </div> 

   
	  
</body></html>

