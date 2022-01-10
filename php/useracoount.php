<?php
	//include database connection file
	require 'config.php';

// check whether the form is submitted
	if (isset($_POST["submit"])){
	$fname = $_POST["FirstName"];
	$lname =$_POST["LastName"];
	$Email = $_POST["Email"];
	$contactNo = $_POST["Phone"];
	$City_town = $_POST["City_Town"];
	$currentPassword = $_POST["password"];
	$newPassword = $_POST["newpassword"];
	$confirmPassword = $_POST["conpassword"];
	
}
	
	
	//insert user entered data into table


$sql = "INSERT INTO UserAccount(First_Name, Last_Name, E-mail, Contact_Number, City_Town, Current_Password, New_Password, Confirm_Password ) VALUES('$fname', '$lname', '$Email','$contactNo','$City_Town','$currentPassword','$newPassword','$confirmPassword')";

if($conn ->query($sql)){
	
	echo "Inserted successfully";
}
else{
echo "Error:". $conn -> error;
}
mysqli_close($conn);



?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>

	<a href="useraccountRead.php">Click me</a>

</body>
</html>