<?php  
	session_start();
	include_once('config.php');
?>

 <!DOCTYPE html>

<html>
	<head>
		<title>LOG IN</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style type="text/css">
			form{
				width: 30%;
			}
		</style>
	</head>

	<body style="background-color:#42a5f5 ;">
		<nav  class="navbar navbar-expand-lg "style="background-color: #0288d1;">
			<img src="LOGO.PNG" alt="LOGO" style="width:128px;height:78px;"> 
	  		<a style="font-family:Impact;font-size:300%;">  &nbsp NSU ROBOTICS SOCIETY</a>
		</nav>
		<nav  class="navbar navbar-expand-lg navbar-light" style="background-color:#01579b ;">
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="https://getbootstrap.com/docs/4.0/components/navbar/">&nbsp &nbsp &nbsp &nbsp <b>BLOG</b></a>
 		 	<a style="font-family:Comic Sans MS;"class="navbar-brand" href="https://getbootstrap.com/docs/4.0/components/navbar/">&nbsp &nbsp &nbsp &nbsp <b>UPCOMING EVENTS</b></a>
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="ABOUTUS.html">&nbsp &nbsp &nbsp &nbsp <b>ABOUT US</b></a>
		</nav>
		<br>
		<br>
		<div align="center">
			<p style="font-size:200%;"> <strong> LOG IN </p>
			<form method="post">
  				<div align="left" class="form-group">
    				<label for="exampleInputEmail1">NSU ID</label>
   					<input type="integer"class="form-control"name="loginnsuid" placeholder="Enter NSU ID">
  				</div>
  				<div align="left" class="form-group">
    				<label for="exampleInputPassword1">Password</label>
    				<input type="password" class="form-control"name="loginpassword" placeholder="Password">
  				</div>
				<button type="submit" value="Login" class="btn btn-primary" name="submit">LOG IN</button>
			</form>
			<br>
			<p style="color:black;">Become a Member <a href="http://localhost/NSURS/SIGNUP.php">Sign Up</a></p>
		</div>
		<?php 
			if (isset($_REQUEST["submit"])){
	
		// Assigning POST values to variables.
		$username = $_REQUEST['loginnsuid'];
		$password = $_REQUEST['loginpassword'];
		// CHECK FOR THE RECORD FROM TABLE
		$query = "SELECT * FROM members WHERE NSU_ID = '$username' and M_PASSWORD ='$password'";
 
		$result = mysqli_query($conn, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);

		if ($count == 1){
			$_SESSION["user"]= $username;
			header('location:http://localhost/NSURS/HOME.php');
		}
		else{
			echo "<center>Your username or password is wrong</center>";
		}
	}
		 ?>
	</body>
</html> 
