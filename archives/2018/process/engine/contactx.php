


<?php




$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$issue = $_POST['issue'];
$subject = $_POST['subject'];
$message = $_POST['message'];
                 
					
				include_once "MRMailer/PHPMailer.php";
					
                $mail = new PHPMailer();
                $mail->setFrom('noreply@sywc.ieee.lk', 'IEEE SLSYWC Contact');
                $mail->addAddress('manoranjana@smartvalley.lk', $firstname);
                $mail->Subject = "[Important] New Message | IEEE Sri Lanka Section SYW Congress";
                $mail->isHTML(true);
                $mail->Body = "
				
				<center><strong><font size='5' color='Orange'>NEW Message</font></strong></center> <br><br>
	
					  <b>Name:</b> '$name'  <br><br><hr><br> 
	                  <b>Email #:</b> '$email' <br><br><hr><br> 
	                  <b>Phone:</b> '$phone' <br><br><hr><br> 
					  <b>Issue:</b> '$issue' <br><br><hr><br>
	                  <b>Subject:</b> '$subject' <br><br><hr><br><br>
					  <b>Message</b> '$message' <br><br><hr><br>
					  
                   <center> <i><font size='2' color='Green'>  This is an automated message sent from SLSYWC Registration Platform.</font></i></center>
                
                ";

  if ($mail->send())
                header('Location: contact-update.php');
					
                else
                    $msg3 = "Something wrong happened! Please try again!";




?>