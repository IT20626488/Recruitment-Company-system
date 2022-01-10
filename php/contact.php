<?php


//include database connection file
require 'config.php';

// check whether the form is submitted
if (isset($_POST["submit"])){
$Cusername = $_POST["name"];
$userEmail = $_POST["email"];
$userTpno = $_POST["tpno"];
$comment = $_POST["comm"];
}

//echo $username,$userEmail,$userTpno,$comment;




//insert user entered data into table


$sql = "INSERT INTO contact(name, e_mail, telephone,comment ) VALUES('$Cusername','$userEmail','$userTpno','$comment')";


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

	<a href="ContactRead.php">Click me</a>

</body>
</html>