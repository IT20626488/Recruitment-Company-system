<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slr_db";


// creating a connection

$conn = new mysqli($servername,$username,$password,$dbname);                                                     


if($conn -> connect_error){
	die (" connection failed".$conn->connect_error);
}