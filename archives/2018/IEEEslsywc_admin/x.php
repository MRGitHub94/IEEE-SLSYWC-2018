<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
	<title>DataTables example - Zero configuration</title>
	<link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
	
	<link rel="stylesheet" type="text/css" href="resources/demo.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>


	<script type="text/javascript" language="javascript" class="init">
	

$(document).ready(function() {
	$('#example').DataTable();
} );


	</script>
</head>
	
	
	
<body>
	
	
	
	
	
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
			
			
			<table id="example" class="display" style="width:100%">
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
	
</body>
</html>