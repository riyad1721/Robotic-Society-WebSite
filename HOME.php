<?php
  session_start();
?>


 <!DOCTYPE html>
<html>
	<head>
		<title>HOME</title>

 		<link rel="stylesheet" href="imageslide2.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body style="background-color: #42a5f5;">
		<nav  class="navbar navbar-expand-lg "style="background-color:  #0288d1  ;">
			<img src="LOGO.PNG" alt="LOGO" style="width:128px;height:78px;"> 
	  		<a style="font-family:Impact;font-size:300%;">  &nbsp NSU ROBOTICS SOCIETY &nbsp &nbsp &nbsp &nbsp</a>
        <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
        <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
        <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
        <img src="pp.PNG" alt="LOGO" style="width:60px;height:60px;"> 
        <a style="font-family:Comic Sans MS;font-size:150%;">&nbsp <?php
        echo $_SESSION["user"];
        ?></a>
        
		</nav>
		<nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #01579b ;">
  			<a style="font-family:Comic Sans MS;" class="navbar-brand" href="http://localhost/NSURS/TEAM.php">&nbsp &nbsp &nbsp &nbsp  <b>TEAM</b> </a>
  			<a style="font-family:Comic Sans MS;" class="navbar-brand" href="http://localhost/NSURS/CHATBOX.php">&nbsp &nbsp &nbsp &nbsp <b>CHATBOX</b></a>
  			<a style="font-family:Comic Sans MS;" class="navbar-brand" href="">&nbsp &nbsp &nbsp &nbsp <b>BLOG</b></a>
 			  <a style="font-family:Comic Sans MS;" class="navbar-brand" href="http://localhost/NSURS/QAROOM.php">&nbsp &nbsp &nbsp &nbsp <b>QA ROOM</b></a>
 			<a  style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/memberlist.php">&nbsp &nbsp &nbsp &nbsp<b>MEMBERS</b></a>
 		 	<a style="font-family:Comic Sans MS;"class="navbar-brand" href="">&nbsp &nbsp &nbsp &nbsp <b>UPCOMING EVENTS</b></a>
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/ABOUTUS.php">&nbsp &nbsp &nbsp &nbsp <b>ABOUT US</b></a>
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/LOGIN.php">&nbsp &nbsp &nbsp &nbsp <b>LOG OUT</b></a>
		</nav>
    


<div align="center">
				<br>
		<div class="sliderimg" style="width:1280px;height:800px;">

        
            <div class="slides">
               <input type="radio" name="r" id="r1" checked>
                <input type="radio" name="r" id="r2">
                <input type="radio" name="r" id="r3">
                <input type="radio" name="r" id="r4">
                <input type="radio" name="r" id="r5">
                <div class="slide s1">
                   <img src="S2.jpg" alt="">
                </div>
                
                <div class="slide">
                   <img src="S1.jpg" alt="">
                </div>
                
                <div class="slide">
                   <img src="S3.jpg" alt="">
                </div>
                
                <div class="slide">
                   <img src="S4.jpg" alt="">
                </div>
                
                <div class="slide">
                   <img src="S5.jpg" alt="">
                </div>
            </div>
            
            <div class="navigation">
                <label for="r1" class="bar"></label>
                <label for="r2" class="bar"></label>
                <label for="r3" class="bar"></label>
                <label for="r4" class="bar"></label>
                <label for="r5" class="bar"></label>
                
            </div>
        </div>
</div>
	</body>
</html> 