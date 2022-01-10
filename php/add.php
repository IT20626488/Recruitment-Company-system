<?php 



    if(isset($_POST['submit'])){
        $usernme=$_POST['username'];
        $password1=$_POST['password'];
        $password2=$_POST['repassword'];
        $email=$_POST['email'];
        $birthday=$_POST['birthday'];
        $phonenumber=$_POST['phonenumber'];
        $job=$_POST['job'];
       
        require_once ("config.php");

        
        //check
        
        if($password1==$password2)//confirm password and password should be match//
        {

            $password1=md5($password1);
    
        $sql="INSERT INTO regist(uname,password,email,birthday,phonenumber,joboorposition) 
        VALUES('$usernme','$password1','$email','$birthday','$phonenumber','$job')";
        //$result=mysqli_query($conn,$sql);
        if($conn->query($sql)){
            echo"inserted successfully";
        }else
        {
            echo"error: ".$conn->error;
        }
        
    }
$conn->close();
 }//password//
 else
 {
      echo "password not matched , input again!";
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>

	<a href="Read.php">Click me</a>

</body>
</html>

