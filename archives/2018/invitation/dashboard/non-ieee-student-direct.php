<?php 
 session_start();
	if(!isset($_SESSION['uid'])){
  header("Location:login_error");
}
  $uid = $_SESSION['uid'];

?>

<?php

/**
 * Created by PhpStorm.
 * User: Manoranjana
 * Date: 15/10/2018
 * Time: 3:27 AM
 */


	$msg1 = "";
    $msg2 = "";
    $msg3 = "";

	use PHPMailer\PHPMailer\PHPMailer;

	if (isset($_POST['submit'])) {
		
		
		$link = mysqli_connect('localhost:3306', 'svieeesl_mano', 'MR100%pro','svieeesl_ieeeSLSYWC');
		
		    $membership = mysqli_real_escape_string($link, $_POST["membership"]);
			$ticketPrice = mysqli_real_escape_string($link, $_POST["ticketPrice"]);
			$discount = mysqli_real_escape_string($link, $_POST["discount"]);	
			$totalPrice = mysqli_real_escape_string($link, $_POST["totalPrice"]);
			$email = mysqli_real_escape_string($link, $_POST["email"]);
		
	        $repName = mysqli_real_escape_string($link, $_POST["repName"]);
		    $repEmail = mysqli_real_escape_string($link, $_POST["repEmail"]);
		    $repMobile = mysqli_real_escape_string($link, $_POST["repMobile"]);
		
		    $sender = mysqli_real_escape_string($link, $_POST["sender"]);
			
		if ($email == "")
			$msg = "Please check your inputs!";
		else {
			$sql = $link->query("SELECT id FROM invitations WHERE email='$email'");
			if ($sql->num_rows > 0) {
				$msg1 = "You have already sent invitation to this deligate!";
			} else {

				$link->query("INSERT INTO invitations (name,membership,ticketPrice,discount,totalPrice,email,sender)
					VALUES ('$name','$membership','$ticketPrice','$discount','$totalPrice','$email','$sender');
				");
				

                include_once "PHPMailer/PHPMailer.php";

                $mail = new PHPMailer();
                $mail->setFrom('hello@sywc.ieee.lk', 'IEEE SLSYWC Team');
                $mail->addAddress($email, $firstname);
                $mail->Subject = "[Important] Invitation | IEEE Sri Lanka Section SYW Congress";
                $mail->isHTML(true);
                $mail->Body = "
				
				<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<!--[if !mso]><!-->
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<!--<![endif]-->
<meta name='viewport' content='width=device-width, initial-scale=1.0' />
<title>Invitation | IEEE SLSYWC 2018</title>
<link rel='shortcut icon' href='https://sywc.ieee.lk/images/favicon.png' type='image/x-icon'>
<link rel='icon' href='https://sywc.ieee.lk/images/favicon.png' type='image/x-icon'>
	
	
<style type='text/css'>
* {
	-webkit-font-smoothing: antialiased;
}
body {
	Margin: 0;
	padding: 0;
	min-width: 100%;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
	mso-line-height-rule: exactly;
}
table {
	border-spacing: 0;
	color: #333333;
	font-family: Arial, sans-serif;
}
img {
	border: 0;
}
.wrapper {
	width: 100%;
	table-layout: fixed;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
.webkit {
	max-width: 600px;
}
.outer {
	Margin: 0 auto;
	width: 100%;
	max-width: 600px;
}
.full-width-image img {
	width: 100%;
	max-width: 600px;
	height: auto;
}
.inner {
	padding: 10px;
}
p {
	Margin: 0;
	padding-bottom: 10px;
}
.h1 {
	font-size: 21px;
	font-weight: bold;
	Margin-top: 15px;
	Margin-bottom: 5px;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.h2 {
	font-size: 18px;
	font-weight: bold;
	Margin-top: 10px;
	Margin-bottom: 5px;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.one-column .contents {
	text-align: left;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.one-column p {
	font-size: 14px;
	Margin-bottom: 10px;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.two-column {
	text-align: center;
	font-size: 0;
}
.two-column .column {
	width: 100%;
	max-width: 300px;
	display: inline-block;
	vertical-align: top;
}
.contents {
	width: 100%;
}
.two-column .contents {
	font-size: 14px;
	text-align: left;
}
.two-column img {
	width: 100%;
	max-width: 280px;
	height: auto;
}
.two-column .text {
	padding-top: 10px;
}
.three-column {
	text-align: center;
	font-size: 0;
	padding-top: 10px;
	padding-bottom: 10px;
}
.three-column .column {
	width: 100%;
	max-width: 200px;
	display: inline-block;
	vertical-align: top;
}
.three-column .contents {
	font-size: 14px;
	text-align: center;
}
.three-column img {
	width: 100%;
	max-width: 180px;
	height: auto;
}
.three-column .text {
	padding-top: 10px;
}
.img-align-vertical img {
	display: inline-block;
	vertical-align: middle;
}
@media only screen and (max-device-width: 480px) {
table[class=hide], img[class=hide], td[class=hide] {
	display: none !important;
}
</style>
<!--[if (gte mso 9)|(IE)]>
	<style type='text/css'>
		table {border-collapse: collapse !important;}
	</style>
	<![endif]-->
</head>

<body style='Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#ececec;'>
<center class='wrapper' style='width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#ececec;'>
  <table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color:#ececec;' bgcolor='#ececec;'>
    <tr>
      <td width='100%'><div class='webkit' style='max-width:600px;Margin:0 auto;'> 
          
          <!--[if (gte mso 9)|(IE)]>

						<table width='600' align='center' cellpadding='0' cellspacing='0' border='0' style='border-spacing:0' >
							<tr>
								<td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
								<![endif]--> 
          
          <!-- ======= start main body ======= -->
          <table class='outer' align='center' cellpadding='0' cellspacing='0' border='0' style='border-spacing:0;Margin:0 auto;width:100%;max-width:600px;'>
            <tr>
              <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'><!-- ======= start header ======= -->
                
                <table border='0' width='100%' cellpadding='0' cellspacing='0'  >
                  <tr>
                    <td><table style='width:100%;' cellpadding='0' cellspacing='0' border='0'>
                        <tbody>
                          <tr>
                            <td align='center'><center>
                                <table border='0' align='center' width='100%' cellpadding='0' cellspacing='0' style='Margin: 0 auto;'>
                                  <tbody>
                                    <tr>
                                      <td class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-spacing:0'>
                                          <tr>
                                            <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td align='center'><font style='font-size:11px; text-decoration:none; color:#474b53; font-family: Verdana, Geneva, sans-serif; text-align:left'><a href='https://sywc.ieee.lk/promo/invitation' target='_blank' style='color:#474b53; text-decoration:none'>View in your Web Browser</a></font></td>
                                          </tr>
                                          <tr>
                                            <td align='center'>&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td height='6' bgcolor='#FF0161' class='contents' style='width:100%; border-top-left-radius:10px; border-top-right-radius:10px'></td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center></td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                </table>
                <table border='0' width='100%' cellpadding='0' cellspacing='0'  >
                  <tr>
                    <td><table style='width:100%;' cellpadding='0' cellspacing='0' border='0'>
                        <tbody>
                          <tr>
                            <td align='center'><center>
                                <table border='0' align='center' width='100%' cellpadding='0' cellspacing='0' style='Margin: 0 auto;'>
                                  <tbody>
                                    <tr>
                                      <td class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' bgcolor='#FFFFFF'><!-- ======= start header ======= -->
                                        <table cellpadding='0' cellspacing='0' border='0' width='100%'>
                                          <tr>
                                            <td class='two-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;'><!--[if (gte mso 9)|(IE)]>
													<table width='100%' style='border-spacing:0' >
													<tr>
													<td width='20%' valign='top' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
													<![endif]-->
                                              
                                              <div class='column' style='width:100%;max-width:110px;display:inline-block;vertical-align:top;'>
                                                <table class='contents' style='border-spacing:0; width:100%'  bgcolor='#ffffff' >
                                                  <tr><br><br><br>
                                                    <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' align='left'><a href='https://sywc.ieee.lk' target='_blank'><img src='https://sywc.ieee.lk/promo/invitation/img/logo.jpg' width='94' alt='' style='border-width:0; max-width:94px;height:auto; display:block' /></a></td>
                                                  </tr>
                                                </table>
                                              </div>
                                              
                                              <!--[if (gte mso 9)|(IE)]>
													</td><td width='80%' valign='top' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
													<![endif]-->
                                              
                                              <div class='column' style='width:100%;max-width:415px;display:inline-block;vertical-align:top;'>
                                                <table width='100%' style='border-spacing:0' bgcolor='#ffffff'>
                                                  <tr>
                                                    <td><table width='100%' border='0' cellspacing='0' cellpadding='0' class='hide'>
                                                        <tr>
                                                          <td height='60'>&nbsp;</td>
                                                        </tr>
                                                      </table></td>
                                                  </tr>
                                                  <tr>
                                                    <td class='inner' style='padding-top:10px;padding-bottom:10px; padding-right:10px;padding-left:10px;'><table class='contents' style='border-spacing:0; width:100%' bgcolor='#FFFFFF'>
                                                        <tr>
                                                          <td align='right' valign='bottom' class='text'><font style='font-size:14px; text-decoration:none; color:#5b5f65;font-family:Arial, Helvetica, sans-serif'><strong><a href='https://sywc.ieee.lk/about' target='_blank' style='color:#5b5f65; text-decoration:none'>ABOUT</a> | <a href='https://sywc.ieee.lk/schedule'target='_blank' style='color:#5b5f65; text-decoration:none'>SCHEDULE</a> | <a href='https://sywc.ieee.lk/contact' target='_blank' style='color:#5b5f65; text-decoration:none'>CONTACT</a></strong></font></td>
                                                        </tr>
                                                      </table></td>
                                                  </tr>
                                                </table>
                                              </div>
                                              
                                              <!--[if (gte mso 9)|(IE)]>
													</td>
													</tr>
													</table>
													<![endif]--></td>
                                          </tr>
                                          <tr>
                                            <td align='left' style='padding-left:40px'><table border='0' cellpadding='0' cellspacing='0' style='border-bottom:2px solid #FF0161' align='left'>
                                                <tr>
                                                  <td height='20' width='30' style='font-size: 20px; line-height: 20px;'>&nbsp;</td>
                                                </tr>
                                              </table></td>
                                          </tr>
                                          <tr>
                                            <td height='30'>&nbsp;</td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center></td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                </table>
                
                <!-- ======= end header ======= --> 
                
                <!-- ======= start hero image ======= -->
                
                <table class='one-column' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-spacing:0;max-width: 600px' bgcolor='#FFFFFF'>
                  <tr>
                    <td align='center'><img src='https://sywc.ieee.lk/promo/invitation/img/cover.png' width='96%' style='max-width:570px;'  alt=''/></td>
                  </tr>
                </table>
                
                <!-- ======= end hero image ======= --> 
                
                <!-- ======= start hero article ======= -->
                
                <table class='one-column' border='0' cellpadding='20' cellspacing='0' width='100%' style='border-spacing:0' bgcolor='#FFFFFF'>
                  <tr>
                    <td align='left'><p style='color:#5b5f65; font-size:35px; text-align:left; font-family: Verdana, Geneva, sans-serif'><strong>Congradulations!</strong></p> <br>
                      <p style='color:#5b5f65; font-size:15px; text-align:justify; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif''>We are extremely pleased and happy to inform that, you have been shortlisted as an eligible delegate for IEEE Sri Lanka Section Student/ Young Professionals/ Women in Engineering Congress 2018, the grandest event of IEEE Sri Lanka Section, which will be held on the <strong>28th, 29th and 30th of December 2018, at Sri Lanka Technological Campus (SLTC), Padukka</strong> premises.<br />
                        In order to complete the registration process, and for you to receive the invitation, you have to complete the payment of the registration fee on or before the <strong>4th of December 2018 at 11:59 AM. </strong></p>
                      <hr>
						   <table border='0' align='left' cellpadding='0' cellspacing='0' style='Margin:0 auto;'>
                                <p style='color:#5b5f65; font-size:18px; text-align:left; font-family: Verdana, Geneva, sans-serif'><strong>YOUR ORDER:</strong></p>
                               
                      </table>

                      <!-- START BUTTON -->

    <table cellpadding='3' cellspacing='0' border-collapse='collapse' border='1' width='100%'>
   <col width='70%'>
  <col width='30%'>
    <thead>
      <tr>
        <th align='left'><font size='3'>Item</font></th>
        <th align='right'><font size='3'>Amount (LKR)</font></th>
      </tr>
    </thead>
    <tbody>
		
      <tr>
        <td><br><p>1 x IEEE Sri Lanka Section SYW Congress 2018 (Ticket)</p></td>
        <td align='right'>$ticketPrice LKR</td>
      </tr>
		
      <tr>
        <td><strong>Discount</strong></td>
        <td align='right'>$discount%</td>
      </tr>
      <tr>
        
        <td><strong>TOTAL</strong></td>
        <td align='right'><strong><font size='3'>$totalPrice LKR</font></strong></td>
      </tr>
    </tbody>
  
                              </table>
								<table>
											<br>
                    <p style='color:#5b5f65; font-size:12px; text-align:justify; font-family: Verdana, Geneva, sans-serif'>You can make the payment to the following representative from your University/ Institute:</p>      
  
      
        <p style='color:#5b5f65; font-size:13px; text-align:justify; font-family: Verdana, Geneva, sans-serif'><strong>Name:</strong> $repName</p>

          <p style='color:#5b5f65; font-size:13px; text-align:justify; font-family: Verdana, Geneva, sans-serif'><strong>Mobile Number:</strong> $repMobile</p>
  
          <p style='color:#5b5f65; font-size:13px; text-align:justify; font-family: Verdana, Geneva, sans-serif'><strong>E-mail:</strong> $repEmail</p>
          
                                    
        </table>
			
        
                                     		
		 <p style='color:#5b5f65; font-size:12px; text-align:justify; font-family: Verdana, Geneva, sans-serif'><font color='#D10003'><strong><i>Note:</i></strong></font> In case you fail to make the payment on or before the deadline, your seat will be offered to the next applicant in line.
<br><br>
Looking forward to having you at the congress!
<br><br>
Thank you.
</p> 			
						
 <table cellpadding='1' cellspacing='1' border='0' width='100%'>
   <col width='5%'>
  <col width='50%'>
   
    <tbody>
		
      <tr>
       <td align='left'><img src='https://sywc.ieee.lk/promo/invitation/img/logo2.jpg' width='80px' alt='' style='border-width:0; max-width:80px;height:auto; display:block' /></td>
        <td align='justify'><br><br><p style='color:#000000; font-size:13px; text-align:justify; font-family: Verdana, Geneva, sans-serif'>$sender<br><font size='1' color='#000000'>Co-Chair | IEEE SLSYWC 2018</font><br><font size='1' color='#7B7B7B'>IEEE Sri Lanka Section<br>Mobile: +94 77 3089692<br>Website:  <a href='https://sywc.ieee.lk' target='_blank'>https://sywc.ieee.lk</a></font></p></td>
      </tr>
		
   
    </tbody>
  
                              </table>
						
						
						
				  </table>
		
                <!-- ======= end hero article ======= --> 
                
                <!-- ======= start two column ======= -->
                
                <table cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#FFFFFF'>
                  <tr> </tr>
                </table>
                
                <!-- ======= end two column ======= --> 
                
                <!-- ======= start divider ======= -->
                
                <table class='one-column' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-spacing:0' bgcolor='#FFFFFF'>
                  <tr>
                    <td align='left' style='padding-left:40px'><table border='0' cellpadding='0' cellspacing='0' style='border-bottom:1px solid #FF0161' align='left'>
                        <tr>
                          <td height='20' width='30' style='font-size: 20px; line-height: 20px;'>&nbsp;</td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td align='center'>&nbsp;</td>
                  </tr>
                </table>
                
                <!-- ======= end divider ======= --> 
                
                <!-- ======= start image ======= -->
                
                <table class='one-column' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-spacing:0;max-width: 600px' bgcolor='#FFFFFF'>
                  <tr>
                    <td align='center'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align='center'><img src='https://sywc.ieee.lk/promo/invitation/img/footer.jpg' width='94%' style='max-width:570px;'  alt=''/></td>
                  </tr>
                </table>
                
                <!-- ======= end image ======= --> 
                <!-- ======= start article1 ======= -->
                
                <table class='one-column' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-spacing:0' bgcolor='#FFFFFF'>
                  <tr>
                    <td align='center' style='padding-left:40px; padding-right:40px; padding-top:40px; padding-bottom:40px'><p style='color:#5b5f65; font-size:28px; text-align:center; font-family: Verdana, Geneva, sans-serif'><strong>IEEE SLSYW Congress 2018</strong></p>
                      <p style='color:#5b5f65; font-size:16px; text-align:center; font-family: Verdana, Geneva, sans-serif'>Be a witness of Sri Lanka's Largest IEEE Event of the Year!</p>
                      
                      <!-- START BUTTON -->
                      
                      <center>
                        <table cellpadding='0' cellspacing='0' border='0' width='100%'>
                          <tr>
                            <td><table border='0' cellpadding='0' cellspacing='0'>
                                <tr>
                                  <td height='20' width='100%' style='font-size: 20px; line-height: 20px;'>&nbsp;</td>
                                </tr>
                              </table>
                              <table border='0' align='center' cellpadding='0' cellspacing='0' style='Margin:0 auto;'>
                                <tbody>
                                  <tr>
                                    <td align='center'><table border='0' cellpadding='0' cellspacing='0' style='Margin:0 auto;'>
                                        <tr>
                                          <td width='250' height='60' align='center' bgcolor='#FF0161'><a href='https://sywc.ieee.lk' style='width:250; display:block; text-decoration:none; border:0; text-align:center; font-weight:bold;font-size:18px; font-family: Arial, sans-serif; color: #ffffff; background:#FF0161' class='button_link'>Visit Now</a></td>
                                        </tr>
                                      </table></td>
                                  </tr>
                                </tbody>
                              </table></td>
                          </tr>
                        </table>
                      </center>
                      
                      <!-- END BUTTON --></td>
                  </tr>
                </table>
                
                <!-- ======= end article1 ======= --> 
                
                 <!-- ======= start footer ======= -->
                
               <table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td><table width='100%' cellpadding='0' cellspacing='0' border='0'  bgcolor='#FF0161'>
      <tr>
        <td height='40' align='center' bgcolor='#FF0161' class='one-column'>&nbsp;</td>
      </tr>
      <tr>
        <td align='center' bgcolor='#FF0161' class='one-column' style='padding-top:0;padding-bottom:0;padding-right:10px;padding-left:10px;'><font style='font-size:13px; text-decoration:none; color:#ffffff; font-family: Verdana, Geneva, sans-serif; text-align:center'><strong>Keep in touch with us on:</strong></font></td>
      </tr>
      <tr>
        <td align='center' bgcolor='#FF0161' class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>&nbsp;</td>
      </tr>
      <tr>
        <td align='center' bgcolor='#FF0161' class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'><table width='150' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td width='33' align='center'><a href='https://www.facebook.com/IEEESL.SYWCongress' target='_blank'><img src='https://sywc.ieee.lk/promo/invitation/img/social_fb.png' alt='facebook' width='32' height='32' border='0'/></a></td>
            <td width='34' align='center'><a href='https://twitter.com/IEEE_SLcongress' target='_blank'><img src='https://sywc.ieee.lk/promo/invitation/img/social_t.png' alt='twitter' width='32' height='32' border='0'/></a></td>
            <td width='33' align='center'><a href='https://www.instagram.com/ieeeslsywc/' target='_blank'><img src='https://sywc.ieee.lk/promo/invitation/img/insta.png' alt='insta' width='32' height='32' border='0'/></a></td> 
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align='center' bgcolor='#FF0161' class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>&nbsp;</td>
      </tr>
      <tr>
        <td align='center' bgcolor='#FF0161' class='one-column' style='padding-top:0;padding-bottom:0;padding-right:10px;padding-left:10px;'><font style='font-size:13px; text-decoration:none; color:#ffffff; font-family: Verdana, Geneva, sans-serif; text-align:center'>Copyright © 2018, All Rights Reserved. | <a href='https://sywc.ieee.lk/team' target='_blank'><font style='font-size:13px; text-decoration:none; color:#ffffff; font-family: Verdana, Geneva, sans-serif; text-align:left'><a href='https://sywc.ieee.lk/team' target='_blank' style='color:#474b53; text-decoration:none'><font color='#FFFFFF'>Team IEEE SLSYWC</font></font></a>
			
			<!--<a href='#' target='_blank' style='color:#ffffff; text-decoration:underline'>Unsubscribe from list.</a>--></font></td>
      </tr>
      <tr>
        <td align='center' bgcolor='#FF0161' class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>&nbsp;</td>
      </tr>
      <tr>
        <td height='6' bgcolor='#FF0161' class='contents1' style='width:100%; border-bottom-left-radius:10px; border-bottom-right-radius:10px'></td>
      </tr>
      </table></td>
  </tr>
  <tr>
    <td><table width='100%' cellpadding='0' cellspacing='0' border='0'> 
      <tr>
        <td height='6' bgcolor='#FF0161' class='contents' style='width:100%; border-bottom-left-radius:10px; border-bottom-right-radius:10px'></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

               <!-- ======= end footer ======= --></td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
					</td>
				</tr>
			</table>
			<![endif]--> 
        </div></td>
    </tr>
  </table>
</center>
</body>
</html>
                
                ";

                if ($mail->send())
                  $msg2 = "Invitation has been sent successfully.";
					
                else
                    $msg3 = "Something wrong happened! Please try again!";
			}
		}
     }		
  
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
                <a class="nav-link" href="https://sywc.ieee.lk/invitation/dashboard/ieee-student-direct">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                   IEEE Student Members (Direct) <span class="sr-only">(current)</span>
                </a>
			 </li>
				
			<li class="nav-item active">
                <a class="nav-link" href="https://sywc.ieee.lk/invitation/dashboard/non-ieee-student-direct">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                   Non-IEEE Student Members (Direct) <span class="sr-only">(current)</span>
                </a>
			 </li>
				
					
			<li class="nav-item">
                <a class="nav-link" href="https://sywc.ieee.lk/invitation/dashboard/ieee-yp-direct">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                   IEEE YP Members (Direct) <span class="sr-only">(current)</span>
                </a>
			</li>
				
		 <li class="nav-item">
                <a class="nav-link" href="https://sywc.ieee.lk/invitation/dashboard/non-ieee-direct">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                   Non-IEEE Members (Direct) <span class="sr-only">(current)</span>
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
     		<section id="">
			
			<h2> <strong>Send Invitations to Non-IEEE Student Members (Direct)</strong></h2>
<br>
			
			<form class="login100-form validate-form" action="" method="POST">
				
			  <div class="form-group">	
				<input type="hidden" class="form-control" name="membership" id="membership" value="Yes" required>
			  </div>
				
			  <div class="form-group">
				<label for="ticketPrice">Ticket Price (LKR):</label>
				<input type="text" class="form-control" name="ticketPrice" id="ticketPrice" value="2,500" required>
			  </div>
				
			 <div class="form-group">
				<label for="discount">Discount:</label>
				<input type="text" class="form-control" name="discount" id="discount" value="10" required>
			  </div>
				
			<div class="form-group">
				<label for="totalPrice">Total Price:</label>
				<input type="text" class="form-control" name="totalPrice" id="totalPrice" value="2,250" required>
			  </div>
				
			<div class="form-group">
				<label for="email">E-Mail:</label>
				<input type="text" class="form-control" name="email" placeholder="Delegate's email address" id="email" required>
			  </div>
				
			<div class="form-group">
				<label for="repName">University Representative:</label>
				<input type="text" class="form-control" name="repName" placeholder="Enter the name of University Represntative" id="repName" >
			  </div>
				
			<div class="form-group">
				<label for="repMobile">Representative's Mobile:</label>
				<input type="text" class="form-control" name="repMobile" id="repMobile" >
			  </div>
				
			<div class="form-group">
				<label for="repEmail">Representative's Email:</label>
				<input type="text" class="form-control" name="repEmail" id="repEmail" >
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
	
			
			</section>
			
    </div>
				  
	  
	  
  </div>
			
			
	

			
			<br><hr><br>
			

			
		
			
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

