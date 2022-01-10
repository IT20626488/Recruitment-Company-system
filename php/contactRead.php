<?php

//connecting to the database
	$conn = mysqli_connect("localhost", "root", "", "slr_db");
	if(!$conn) {
		echo 'connection error';
	}

			$mysql_get_data = "SELECT * FROM contact";
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
		
			<h6>Name: <?php echo $array['name']; ?></h6>
			<h6>email: <?php echo $array['e_mail']; ?></h6>
			<h6>telephone: <?php echo $array['telephone']; ?> </h6>
			<h6>comment: <?php echo $array['comment']; ?> </h6>
		<?php } ?>
	</div>

	

</body>
</html>

