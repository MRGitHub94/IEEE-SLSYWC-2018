<?php


$msg1="";
$msg2="";


if(isset($_POST['submit'])){
$link = mysqli_connect('localhost:3306', 'svsl_mano', 'MR100%pro','svsl_ieeeSLSYWC');

		    $name = mysqli_real_escape_string($link, $_POST["name"]);
			$ticketPrice = mysqli_real_escape_string($link, $_POST["ticketPrice"]);
			$discount = mysqli_real_escape_string($link, $_POST["discount"]);	
			$totalPrice = mysqli_real_escape_string($link, $_POST["totalPrice"]);
			$email = mysqli_real_escape_string($link, $_POST["email"]);	
		    $sender = mysqli_real_escape_string($link, $_POST["sender"]);
	
if($link){
	$sql = $link->query("SELECT id FROM invitations WHERE email='$email'");
		if($sql->num_rows > 0)
	      {
			
		    $msg1="done!";
			//header('Location: #footer');

	      }
		     else 
		     {
		       $link->query("INSERT INTO invitations (name,ticketPrice,discount,totalPrice,email,sender) VALUES ('$name','$ticketPrice','$discount','$totalPrice','$email','$sender');");
			    $msg2="sent";
				//header('Location: #footer');
			
		     }
        }

mysqli_close($link);
	}
?>

<form class="login100-form validate-form" action="" method="POST">
			  <div class="form-group">
				<label for="name">Deligate Name:</label>
				<input type="text" class="form-control" name="name" placeholder="Enter the Deligate's name" id="name" required>
			  </div>
				
			  <div class="form-group">
				<label for="ticketPrice">Ticket Price:</label>
				<input type="text" class="form-control" name="ticketPrice" id="ticketPrice" value="2,500 LKR" required>
			  </div>
				
			 <div class="form-group">
				<label for="discount">Ticket Price:</label>
				<input type="text" class="form-control" name="discount" id="discount" value="10%" required>
			  </div>
				
			<div class="form-group">
				<label for="totalPrice">Total Price:</label>
				<input type="text" class="form-control" name="totalPrice" id="totalPrice" value="2,250 LKR" required>
			  </div>
				
			<div class="form-group">
				<label for="email">E-Mail:</label>
				<input type="text" class="form-control" name="email" id="email" required>
			  </div>
				
			<div class="form-group">
				<label for="sender">Sender:</label>
				<input type="text" class="form-control" name="sender" id="sender" value="Dulan Dias" required>
			  </div>		
				
			
			  <button type="submit" class="btn btn-default" name="submit">Send Invitation</button>
				
				
				<br><br>
			
		
	          <div class="success"><center><font size="4" color=#D50E12><?php echo $msg1 ?></font></center></div>
              <div class="unsccess"><center><font size="4" color=#19C909><?php echo $msg2 ?></font></center></div>
              <div class="unsccess"><center><font size="4" color=#D50E12><?php echo $msg3 ?></font></center></div>
				
			</form>
			



