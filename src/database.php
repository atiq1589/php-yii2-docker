<?php
// Create connection
$connect = mysqli_connect('db', 'root', 'example', 'study');

// Check connection
if (mysqli_connect_errno($connect)) {
	echo "Failed to connect to database: " . mysqli_connect_error();
}
?>