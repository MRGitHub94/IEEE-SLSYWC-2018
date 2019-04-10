<?php 
 session_start();
	if(!isset($_SESSION['uid'])){
  header("Location:login_error");
}
  $uid = $_SESSION['uid'];


$page = '';
 $sec = "60";
 header("Refresh: $sec; url=https://admin.sywc.ieee.lk/dashboard");
?>




<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://sywc.ieee.lk/images/favicon.png">

    <title>Dashboard | IEEE SLSYWC 2018</title>

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
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://getbootstrap.com/docs/4.0/examples/dashboard/#">IEEE SLSYWC 2018</a>
     <div class="form-control form-control-dark w-100"> <marquee  scrollamount='5'><font color="#D1CECE">You have been accessed into a restricted area. Your IP addresses are being traced. Do not miss use the system. - IEEE SLSYWC Webmaster</marquee></font> </div>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout">Logout (Admin)</a>
        </li>
		  
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="https://dashboard.sywc.ieee.lk">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Home <span class="sr-only">(current)</span>
                </a>
              </li>
        
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2"><strong>DASHBOARD</strong> </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
				
				  
				 <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-sm btn-outline-secondary dropdown-toggle" value="Export to Spreadsheet" /> <span data-feather="book-open"></span> 
    </form>
				  
	  
				  
              </div>
            </div>
          </div>
			
	<div>
      
            <table cellspacing="100">
              <thead>
				  
<tr><th align="left"  width="72%"><h2>Delegate Registration List (Real-time)</h2> </th>
	
	<th width=""><?php
date_default_timezone_set("Asia/Colombo");
echo "<font color='#0004A9'>Local Server Time: " . date("h.ia")." (Colombo, Sri Lanka)</font>";
?> </th> </tr>
				 
				</thead>
		
		 
		</table>
				
		<hr>
		 <br>
				  
				  
        <div class="container">
		<section>
			
		 
			<?php
        $con=  mysqli_connect('localhost:3306', 'svsl_mano', 'MR100%pro', 'svsl_ieeeSLSYWC');

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from delegates order by id desc");

       ?>
			
			
			<table id="mytable" class="display" style="width:100%">
				<thead>
					<tr>
						 <th>Name</th>
                  <th>NIC</th>
                  <th>University</th>
                  <th>Faculty</th>
                  <th>Email</th>
				  <th>Phone</th>
				  <th>Feedback</th>
				  <th>Profile Pic</th>
				 <th><center>Status</center></th>
						
					</tr>
				</thead>
				
			 <tbody>
				  
				   <?php

             while($row=  mysqli_fetch_array($con))

             {
                 ?>
                <tr>
                <td><?php echo '<br><br> ' ;echo $row['firstname']; echo ' ' ; echo $row['lastname']; ?></td>
                <td><?php echo '<br><br> ' ;echo $row['nic']; ?></td>
                <td><?php echo '<br><br> ' ;echo $row['university']; ?></td>
                <td><?php echo '<br><br> ' ;echo $row['faculty'] ;?></td>
                <td><?php echo '<br><br> ' ;echo $row['email'] ;?></td>
                <td><?php echo '<br><br> ' ;echo $row['phone'] ;?></td>
                <td><?php echo '<br><br> ' ;echo $row['feedback'] ;?></td>
				<td><?php echo "<img src='https://sywc.ieee.lk/test_reg/" . $row['filepath'] . "' width='100' height='100'>" ;?>    
					
					<?php echo "<br>" ;?>
					<?php echo "<strong><center><a href='https://sywc.ieee.lk/test_reg/" . $row['filepath'] . "' target='_blank'>(view <i class='fa fa-external-link' aria-hidden='true'></i>)</a></center></strong>" ;?>
					
					
					</td>
                <td><center><?php echo '<br><br> ' ;echo $row['isEmailConfirmed'] ;?></center></td>
                </tr>
				  
				  <?php
             }
             ?>
               
              </tbody>
				
				
			  <tfoot>
					<tr>
						 <th>Name</th>
                  <th>NIC</th>
                  <th>University</th>
                  <th>Faculty</th>
                  <th>Email</th>
				  <th>Phone</th>
				  <th>Feedback</th>
				  <th>Profile Pic</th>
				 <th><center>Status</center></th>
						
					</tr>
				</tfoot>
			</table>
			

		</section>
	</div>
        </main>
      </div>
    </div>
		
		</div>
	  
	  <hr>
	  <div class="container">
	
  <footer>
	 <center> <font color="#616161"><p>Copyright © SLSYWC 2018. Developed by <a href="https://fb.com/mrfbonline" target="_blank"> MR</a> </p> </font> </center>
	   
	  </footer>
	  
	  </div> 

   
	  
</body></html>

