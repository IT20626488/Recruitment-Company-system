<!DOCTYPE html>
<html>
<head>
<title> Login </title>
<link rel = "stylesheet" type="text/css" href = "../css/HF.css">
<link rel = "stylesheet" type="text/css" href = "../css/Login.css">

	<script src="HF.js"></script>
	<div class="header">
  
	<img class="im" src="../images/logo.png" height="150px" width="150px" alt = "Logo" >
	<br/><br/><br/><br/>
	
	<center>
	<h1 id = "h">  SL Recruitment  </h1>
	</center>
	
	<ul class = "N">
	    <li class = "n"><a href="Home.html">Home</a></li>
		<li class = "n"><a href="Recruitment.html">Recruitment</a></li>
		<li class = "n"><a href="Job Seekers.html">Job Seekers</a></li>
		<li class = "n"><a href="Training.html">Training</a></li>
		<li class = "n"><a href="Sign Up.html">Sign Up</a></li>
		<li class = "n"><a href="Login.html">Login</a></li>
		
		<input id = "s" type="text" placeholder= "Search...">
		
		<img class = "i" src="../images/search.jfif" height = "44px"  alt="i" onclick="onClick(this) ">
		
		
	</ul>
</div>
<?php include_once("../php/config.php");
include_once("login.php");


?>

</head>

<body>


<br>
<center>

<div class="loginBox">

<h2> Login </h2>
<form action="Login.php" method="post">

  <div class="Login">
    <p>Username</p>
    <input type="text" placeholder="Enter Username" name="username" required> <br>

    <p>Password</p>
    <input type="password" placeholder="Enter Password" name="password" required> <br><br>

    <input type="submit" value="Login" name="submit" ><br><br>
    <a href="#">Forget Password</a><br>
	<p>Don't have an account ?<a href="index.php"><b>Register</b></a></p><br>
  </div>

 
 
</form>

</div>
</center>
<br>


<hr>

<div class="footer">
  

	
	<ul class = "f"> 	
		<a href = "About us.html">About us</a></br>
		<a href = "Contact us.html">Contact us</a></br>
		<a href = "Our Clients.html">Our Clients</a></br>
		<a href = "Services.html">Services</a></br>
	</ul>
	
	
	<a href="https://facebook.com/" class="fb" ><img src ="../images/fb.jpg" height="30px" width="30px"></a>
	<a href="https://whatsapp.com/" class="wp" ><img src ="../images/wp.png" height="30px" width="30px"></a>
	<a href="https://twitter.com/" class="tw" ><img src ="../images/tw.png" height="30px" width="30px"></a>
	<a href="https://gmail.com/" class="gm"><img src ="../images/gm.png" height="30px" width="30px"></a>
	
	</div>

</body>









</html>