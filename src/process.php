<?php include('database.php'); ?>

<?php
	//Assign post variables
	$first_name = mysqli_real_escape_string($connect, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($connect, $_POST['last_name']);
	$department = mysqli_real_escape_string($connect, $_POST['department']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	
	mysqli_query($connect,"INSERT INTO employees (first_name,last_name,department,email)
											VALUES ('$first_name','$last_name','$department','$email')");
											
	if(mysqli_affected_rows($connect) > 0){
		echo "<p>Employee Added</p>";
		echo "<a href=\"db.php\">Go Back</a>";
	} else {
		echo "Employee NOT Added<br />";
		echo mysqli_error ($connect);
	}
?>