<?php

//connecting to the database
	$conn = mysqli_connect("localhost", "root", "", "slr_db");
	if(!$conn) {
		echo 'connection error';
	}

			$mysql_get_data = "SELECT * FROM UserAccount";
			$sql_data_result = mysqli_query($conn, $mysql_get_data);
			$data_array = mysqli_fetch_all($sql_data_result, MYSQLI_ASSOC);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<div>	
		<?php foreach($data_array as $array) { ?>
		
			<h6>Name: <?php echo $array['First_Name']; ?></h6>
			<h6>email: <?php echo $array['Last_Name']; ?></h6>
			<h6>telephone: <?php echo $array['E-mail']; ?> </h6>
			<h6>contact number: <?php echo $array['Contact_Number']; ?> </h6>
			<h6>city/town: <?php echo $array['City_Town']; ?> </h6>
			<h6>current password: <?php echo $array['Current_Password']; ?> </h6>
			<h6>new password: <?php echo $array['New_Password']; ?> </h6>
			<h6>confirm password: <?php echo $array['Confirm_Password']; ?> </h6>
			
		<?php } ?>
	</div>
