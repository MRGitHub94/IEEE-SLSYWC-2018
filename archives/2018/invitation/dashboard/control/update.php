<?php
        //Connect with MySQL     
	$con = mysqli_connect('localhost', 'svsites_mcader', 'SVdb99#','');
        
        //Connect with DB
	if(!mysqli_select_db($con, 'svsites_mcmarket'))
	{
	  echo "Database Not Selected";
	}
	
	//Update Query	   
	$sql = "UPDATE tops SET adtitle='$_POST[adtitle]',adurl='$_POST[adurl]' WHERE id=$_POST[id]";
	
	//Execute the Query			   
	if(mysqli_query($con,$sql))
	   header("refresh:0; url=../dashboard.php#tops");
	else
	   echo "Ad was not updated";

?>