<?php
	include_once("config.php");
	//fetching data in descending order (lastest entry first)
	$sql = "SELECT M.NAME, M.DEPARTMENT, M.SUBJECT, M.M_STATUS, M.EMAIL
		FROM members M ";
	$result = mysqli_query($conn, $sql);
		session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Chatbox</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			table, th, td{
				border: 1px solid black; 
				border-collapse: collapse;	
			}
		</style>
	</head>


	<body style="background-color:#42a5f5 ;">
		<nav  class="navbar navbar-expand-lg "style="background-color: #0288d1 ;">
			<img src="LOGO.PNG" alt="LOGO" style="width:128px;height:78px;"> 
	  		<a style="font-family:Impact;font-size:300%;">  &nbsp NSU ROBOTICS SOCIETY &nbsp &nbsp &nbsp &nbsp</a>
	  		<a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
            <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
            <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
            <a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
            <img src="pp.PNG" alt="LOGO" style="width:60px;height:60px;"> 
            <a style="font-family:Comic Sans MS;font-size:150%;">&nbsp<?php
            echo $_SESSION["user"];
            ?></a>
		</nav>
		

	<nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #01579b ; height:100px; ">
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp</label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/HOME.php"  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/HOME.php">  
        <img  src="20607080.jpg" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>
        <b style="color:black ;">HOME</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp </label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/Team.php"  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/Team.php">  
        <img  src="9970.jpg" alt="HTML tutorial" style="width:56px;height:42px;border:0;">
        <br> &nbsp
        <b style="color:black ;">Team</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/CHATBOX.php"  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/CHATBOX.php">  &nbsp 
        <img  src="01656.jpg" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>
        <b style="color:black ;">CHATBOX</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/BLOG.php"  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/BLOG.php">   
        <img  src="12345.png" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>
        <b style="color:black ;">BLOG</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/QAROOM.php"  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/QAROOM.php">   &nbsp 
        <img  src="1234.png" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>
        <b style="color:black ;">QAROOM</b>
        </a>
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/memberlist.php"  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/memberlist.php"> &nbsp &nbsp
        <img  src="43022.jpg" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>
        <b style="color:black ;">MEMBERS</b>
        </a>

    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
       <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/UPCOMINGEVENT.php"  </a>
       <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/UPCOMINGEVENT.php"> &nbsp &nbsp &nbsp &nbsp &nbsp
       <img  src="5588.jpg" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
       <br>
       <b style="color:black ;">UPCOMING EVENT</b>
       </a>


    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/LOGIN.php"  </a>
        <a style="font-family:Comic Sans MS;align-items:center;"   href="http://localhost/NSURS/LOGIN.phphttp://localhost/NSURS/LOGIN.php"> &nbsp 
        <img  src="logout.png" alt="HTML tutorial" style="width:54px;height:42px;border:0;">
        <br>&nbsp
        <b style="color:black ;"> LOGOUT</b>
        </a>
  </nav>

<br><br><br>
  <style>
.footer {
  
  left: 0;
  bottom: 0;
  width: 100%;
  height: 150px;
  background-color:#BFC9CA ;
  color: white;
  text-align: center;
}
</style>
<div class="footer">
  <br>

  <a style="font-family:Calibri; ;"class="navbar-brand" href="http://localhost/NSURS/ABOUTUS.php"><b>ABOUT US</b></a>
  <p style="color: black;"> © Copyright reserved by Team Professional Noob</p>
</div>

		
	</body>