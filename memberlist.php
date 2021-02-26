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
		<title>Members</title>
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
            <img src="pp.PNG" alt="LOGO" style="width:60px;height:60px;"> 
            <a style="font-family:Comic Sans MS;font-size:150%;">&nbsp<?php
            echo $_SESSION["user"];
            ?></a>
		</nav>
		<nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #01579b ;">
			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/HOME.php">&nbsp &nbsp &nbsp &nbsp <b>HOME</b></a>
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/TEAM.php">&nbsp &nbsp &nbsp &nbsp <b>TEAM</b></a>
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="https://getbootstrap.com/docs/4.0/components/navbar/">&nbsp &nbsp &nbsp &nbsp <b>CHATBOX</b></a>
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="https://getbootstrap.com/docs/4.0/components/navbar/">&nbsp &nbsp &nbsp &nbsp <b>BLOG</b></a>
 			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="https://getbootstrap.com/docs/4.0/components/navbar/">&nbsp &nbsp &nbsp &nbsp <b>QA ROOM</b></a>
 			<a  style="font-family:Comic Sans MS;background-color: white;"class="navbar-brand" href="http://localhost/NSURS/memberlist.php">&nbsp &nbsp &nbsp &nbsp<b>MEMBERS</b></a>
 		 	<a style="font-family:Comic Sans MS;"class="navbar-brand" href="https://getbootstrap.com/docs/4.0/components/navbar/">&nbsp &nbsp &nbsp &nbsp <b>UPCOMING EVENTS</b></a>
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/ABOUTUS.php">&nbsp &nbsp &nbsp &nbsp <b>ABOUT US</b></a>
  			<a style="font-family:Comic Sans MS;"class="navbar-brand" href="http://localhost/NSURS/LOGIN.php">&nbsp &nbsp &nbsp &nbsp <b>LOG OUT</b></a>
		</nav>
		<br><br>
		<h1 align="center" style="font-family:Comic Sans MS;">Members and Their Status</h1>
		<br>

		<table align="center" class="table table-bordered" style="background-color:#b0d7fa;font-family:Comic Sans MS;">
			<thead class="thead-dark">
       			<tr>
    				<th>Name</th>
    				<th >Department</th>
    				<th>Subject</th>
    				<th >Status</th>
    				<th>Email</th>
  				</tr>
			</thead>

			<?php 
				while($res = mysqli_fetch_array($result)) { 
			?>
					<tr>	
						<td><?php echo $res['NAME']; ?></td>
						<td><?php echo $res['DEPARTMENT'];?></td>		
        				<td><?php echo $res['SUBJECT'];?></td>
						<td><?php echo $res['M_STATUS'];?></td>		
        				<td><?php echo $res['EMAIL'];?></td>
					</tr>

			<?php	
				}
			?>

		</table>
	</body>
</html>