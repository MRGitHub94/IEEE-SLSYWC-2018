<?php
        //Connect with MySQL     
	$con = mysqli_connect('localhost', 'svsites_mcader', 'SVdb99#','');
        
        //Connect with DB
	if(!mysqli_select_db($con, 'svsites_mcmarket'))
	{
	  echo "Database Not Selected";
	}
	
	//Delete Query		   
	$sql = "DELETE FROM tops WHERE id='$_GET[id]'";
	
	//Execute the Query			   
	if(mysqli_query($con,$sql))
	   header("refresh:0; url=../dashboard.php#tops");
	else
	   echo "Profile was not deleted";

?>