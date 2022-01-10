<?php

//connecting to the database
	$conn = mysqli_connect("localhost", "root", "", "slr_db");
	if(!$conn) {
		echo 'connection error';
	}

			$mysql_get_data = "SELECT * FROM regist";
			$sql_data_result = mysqli_query($conn, $mysql_get_data);
			$data_array = mysqli_fetch_all($sql_data_result, MYSQLI_ASSOC);
            $conn->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<div>	
		<?php foreach($data_array as $array) { ?>
		
			<h6>user name: <?php echo $array['uname']; ?></h6>
			<h6>email: <?php echo $array['email']; ?></h6>
			<h6>telephone: <?php echo $array['phonenumber']; ?> </h6>
			<h6>birthday: <?php echo $array['birthday']; ?> </h6>
			<h6>job or position: <?php echo $array['joboorposition']; ?> </h6>
		
			
		<?php } ?>
	</div>
