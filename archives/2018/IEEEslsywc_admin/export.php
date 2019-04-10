<?php  
//export.php 

$connect = mysqli_connect('localhost:3306', 'svsl_mano', 'MR100%pro', 'svsl_ieeeSLSYWC');
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM delegates";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="5" cellspacing="100"> 
   <br>
   <h2> IEEE SLSYWC 2018 Delegate List(Updated)<h2>
   <br> <br>
                    <tr>  
                   <th align="left">Name</th>
                  <th align="left">NIC</th>
                  <th align="left">University</th>
                  <th align="left">Faculty</th>
                  <th align="left">Email</th>
				  <th align="left">Phone</th>
				  <th align="left">Feedback</th>
				 <th align="left">Status</th> 
      
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td align="left">'.$row["firstname"].' '.$row["lastname"].'</td>  
                         <td align="left">'.$row["nic"].'</td>  
                         <td align="left">'.$row["university"].'</td>  
                         <td align="left">'.$row["faculty"].'</td>  
                         <td align="left">'.$row["email"].'</td>
						 <td align="left">'.$row["phone"].'</td>
						 <td align="left">'.$row["feedback"].'</td>
						 <td align="left">'.$row["isEmailConfirmed"].'</td>
						 
						 
						 
                    </tr>
	
   '
	   
	   ;
	  
	  
	  
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=IEEE_SLSYWC_Delegate_List.xls');
  echo $output;
 }
}
?>