<?php
	$msg = "";

	if (isset($_POST['submit'])) {
		
$conn = mysqli_connect('localhost:3306', 'svsl_mano', 'MR100%pro','svsl_ieeeSLSYWC');
			
		
// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$password = md5($password);
$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysqli_query($conn, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $u_name and $p_word, table row must be 1 row
if($count==1){
while ($row = mysqli_fetch_array($result)) {
        $user_id = $row['id'];
    }
// Register $u_name, $p_word and redirect to My Profile
session_start();
$_SESSION['username'] = $u_name;
$_SESSION['uid'] = $user_id;

header('location:dashboard');
}
else {
  $msg = "Username or Password Incorrect!";
}
		
	}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | IEEE SLSYWC 2018</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	 <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://sywc.ieee.lk/images/favicon.png">

</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">

				<img src="images/logo.jpg" width="200"><br><br>

			<font color="#303030">	<b>You must login fisrt to continue :(</b></font> <br><br>
				<font color="red">	<?php if ($msg != "") echo $msg . "<br><br>" ?></font>

				<form method="post" action="">
					<input class="form-control" name="username" type="text" placeholder="Username" required><br>
					<input class="form-control" name="password" type="password" placeholder="Password" required><br>
					<input class="btn btn-danger" type="submit" name="submit" value="Login">
				</form>

			</div>
		</div>
	</div>
</body>
</html>

