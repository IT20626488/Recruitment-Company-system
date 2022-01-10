<?php

//include database connection file
require 'config.php';

// check whether the form is submitted
if (isset($_POST["submit"])){
$fullname = $_POST["fname"];
$username = $_POST["uname"];
$userEmail = $_POST["email"];
$contactno = $_POST["contact"];
$pasword = $_POST["pasword"];
}






//insert user entered data into table


$sql = "INSERT INTO signup(Fullname,Username,Email,Contact,Password ) VALUES('$fullname','$username','$userEmail','$contactno','$pasword')";


if($conn ->query($sql)){
	
	echo "Inserted successfully";
}
else{
echo "Error:". $conn -> error;
}

$conn->close();


?>