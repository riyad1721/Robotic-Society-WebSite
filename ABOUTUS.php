<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>About Us</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body style="background-color:  #42a5f5;">
		<nav  class="navbar navbar-expand-lg "style="background-color:  #0288d1  ;">
			<img src="LOGO.PNG" alt="LOGO" style="width:128px;height:78px;"> 
	  		<a style="font-family:Impact;font-size:300%;">  &nbsp NSU ROBOTICS SOCIETY &nbsp &nbsp &nbsp &nbsp</a>
        	<a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
        	<a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
        	<a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
        	<img src="pp.PNG" alt="LOGO" style="width:60px;height:60px;"> 
        	<a style="font-family:Comic Sans MS;font-size:150%;">&nbsp
        		<?php
        			echo $_SESSION["user"];
        		?>
        	</a>
		</nav>
		<nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #01579b ;">
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/HOME.php">&nbsp &nbsp &nbsp &nbsp <b>HOME</b></a>
  			<a style="font-family:Comic Sans MS;" class="navbar-brand" href="http://localhost/NSURS/TEAM.php">&nbsp &nbsp &nbsp &nbsp  <b>TEAM</b> </a>
  			<a style="font-family:Comic Sans MS;" class="navbar-brand" href="http://localhost/NSURS/CHATBOX.php">&nbsp &nbsp &nbsp &nbsp <b>CHATBOX</b></a>
  			<a style="font-family:Comic Sans MS;" class="navbar-brand" href="">&nbsp &nbsp &nbsp &nbsp <b>BLOG</b></a>
 			<a style="font-family:Comic Sans MS;" class="navbar-brand" href="http://localhost/NSURS/QAROOM.php">&nbsp &nbsp &nbsp &nbsp <b>QA ROOM</b></a>
 			<a  style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/memberlist.php">&nbsp &nbsp &nbsp &nbsp<b>MEMBERS</b></a>
 		 	<a style="font-family:Comic Sans MS;"class="navbar-brand" href="">&nbsp &nbsp &nbsp &nbsp <b>UPCOMING EVENTS</b></a>
 		 	<a style="font-family:Comic Sans MS;background-color: white;"class="navbar-brand" href="">&nbsp &nbsp &nbsp &nbsp <b>ABOUT US</b></a>
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/LOGIN.php">&nbsp &nbsp &nbsp &nbsp <b>LOG OUT</b></a>
		</nav>
		<br><br>
		<h1 align="center" style="font-family:Comic Sans MS;">ABOUT US</h1>
		<br>
		<p align="center"><strong>The main objective of this website is to bring all the robotics lover people of North South University under a same roof</p>
		<br><br><br>
		<div align="center">
			<h4><strong>This Website is Developed By</h4>
			<br><br>
			<div class="container">
  <div class="row">
    <div class="col">
      <img src="saif.jpg" alt="saif" style="width:150px;height:150px;">
      <br>
			<p> Md. Saif Ahammod Khan.</p>
			<p>Id: 1721779042</p>
			<p>Email: saif.ahammod@gmail.com</p>
    </div>
    <div class="col">
     			<img src="riyad.jpg" alt="riyad" style="width:150px;height:150px;">
     			<br>
     			<p> Md Reyad Hossain</p>
				<p>Id: 1721966642</p>
				<p>Email: reyadhasan7254@gmail.com</p>
    </div>
  </div>
			


		</div>
		
	</body>
</html> 