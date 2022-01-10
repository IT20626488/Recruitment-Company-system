<?php 

	session_start();

    if(isset($_POST['submit'])){
        $usernme=$_POST['username'];
        $password1=$_POST['password'];
        
       
        require_once ("config.php");

		if(empty($usernme)){
			echo ($errors."user name required");
			
		}
		if(empty($password1)){
			echo ($errors."user name required");
		}
		
		if(count($errors)==0){
			$password1=md5($password1);

			$sql="SELECT*FROM siregi WHERE uname='$usernme' AND password='$password1'";
			$result = $conn->query($sql);
			if(mysqli_query($result)){
				
				echo "logged in successfully";
				
			}
		}else{
			echo ($errors."wrong user/password combination .please try again");
		}
        
	}






?>