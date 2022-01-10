

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel = "stylesheet" type="text/css" href = "../css/HF.css">
	<script src="../js/hfj.js"></script>

	<div class="header">
  
	<img class="im" src="../images/logo.png" height="150px" width="150px" alt = "Logo" >
	<br/><br/><br/><br/>
	
	<center>
	<h1 id = "h">  SL Recruitment  </h1>
	</center>
	
    <ul class = "N">
	    <li class = "n"><a href="Home.html">Home</a></li>
		<li class = "n"><a href="Recruitment.html">Recruitment</a></li>
		<li class = "n"><a href="UserAccount.html">Job Seekers</a></li>
		<li class = "n"><a href="training.html">Training</a></li>
		<li class = "n"><a href="signup.html">Sign Up</a></li>
		<li class = "n"><a href="index1.php">Login</a></li>
		
		<input id = "s" type="text" placeholder= "Search...">
		
		
		
	</ul>
</div>
	
</head>
<body>
<hr><center>
    <div class="Registration-form ">
        <img src="../images/user.png">
            <form action="../php/index.php" method="post" enctype="multipart/form-data">
                
                <input type="text" placeholder="User name" class="txt" name="username" id="t1">
                <input type="password" placeholder="Password" class="txt" name="password" id="t2">
                <input type="password" placeholder="Re-password" class="txt" name="repassword" id="t3">
                <input type="email" placeholder="Email" class="txt" name="email" id="t4">
                <input type="date" placeholder="Birthday" class="txt" name="birthday" id="t5">
                <input type="text" placeholder="Phone number" class="txt" name="phonenumber" id="t6">
                <input type="text" placeholder="job/position" class="txt" name="job" id="t7">
                <label class="label">CV/Bio Data Upload</label>
                <input type="file" name="image" id="">
                <input  type="submit" value="Sumbit" class="btn" name="submit" onclick="registration()" id="res">
                


                <a href="index1.php">Already Have an Account</a>

    </form></div>
    <?php 
    include_once("config.php");
    include_once("add.php");
    include_once("file.php");
    

    
    
    
    
    ?>
</center>

<hr>
	<div class="footer">
  

	
	<ul class = "f"> 	
		<a href = "about.html">About us</a></br>
		<a href = "contact us.html">Contact us</a></br>
		<a href = "Our Clients.html">Our Clients</a></br>
		<a href = "service.html">Services</a></br>
	</ul>
	
	
	<a href="https://facebook.com/" class="fb" ><img src ="../images/fb.jpg" height="30px" width="30px"></a>
	<a href="https://whatsapp.com/" class="wp" ><img src ="../images/wp.png" height="30px" width="30px"></a>
	<a href="https://twitter.com/" class="tw" ><img src ="../images/tw.png" height="30px" width="30px"></a>
	<a href="https://gmail.com/" class="gm"><img src ="../images/gm.png" height="30px" width="30px"></a>
	
	</div>
</body>
</html>