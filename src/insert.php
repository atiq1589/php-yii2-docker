<!DOCTYPE html>
<html>
<head>
<style>
	label{display:inline-block;width:100px;}
</style>
<title>Add Employee</title>
</head>
<body>
<h1>Add Employee</h3>
	<form method="post" action="process.php">
		<label>First Name: </label>
		<input type="text" name="first_name"><br />
		<label>Last Name: </label>
		<input type="text" name="last_name"><br />
		<label>Department: </label>
		<input type="text" name="department"><br />
		<label>Email: </label>
		<input type="text" name="email"><br /><br />
		<input type="submit" value="Add Employee" />
	</form>
</body>
</html>