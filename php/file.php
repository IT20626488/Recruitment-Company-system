<?php 


    $errors=array();
    if(isset($_POST['submit'])){
    $file_name=$_FILES['image']['name'];
    $file_type=$_FILES['image']['type'];
    $file_size=$_FILES['image']['size'];
    $temp_name=$_FILES['image']['tmp_name'];

    $upload_to='images/';
    $file_uploaded=move_uploaded_file($temp_name,$upload_to . $file_name);
    }


   


?>

