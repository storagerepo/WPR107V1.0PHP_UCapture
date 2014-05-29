<!DOCTYPE HTML>
<html>
	<head>
		<title>MySQLi: Create Record</title>
	</head>
<body>

<h1>MySQLi: Create Record</h1>

<?php
// if the form was submitted
if($_POST){

	// connect to database
	include 'libs/db_connect.php';

	// sql query
	$sql = "INSERT INTO 
				users (firstname, lastname, username, password)
			VALUES
				(?, ?, ?, ?)";

	// if the statement was prepared
	if($stmt = $mysqli->prepare($sql) ){

		/*
		 * bind the values,
		 * "ssss" means 4 string were being binded,
		 * aside from s for string, you can also use:
		 * i for integer
		 * d for decimal
		 * b for blob
		 */
		$stmt->bind_param(
			"ssss", 
			$_POST['firstname'],
			$_POST['lastname'],
			$_POST['username'],
			$_POST['password']
		);

		// execute the insert query
		if($stmt->execute()){
			echo "User was saved.";
			$stmt->close();
		}else{
			die("Unable to save.");
		}

	}else{
		die("Unable to prepare statement.");
	}

	// close the database
	$mysqli->close();
}

?>

<!--we have our html form here where user information will be entered-->
<form action='add.php' method='post' border='0'>
	<table>
		<tr>
			<td>Firstname</td>
			<td><input type='text' name='firstname' /></td>
		</tr>
		<tr>
			<td>Lastname</td>
			<td><input type='text' name='lastname' /></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type='text' name='username' /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type='password' name='password' /></td>
		<tr>
			<td></td>
			<td>
				<input type='submit' value='Save' />
				<a href='index.php'>Back to index</a>
			</td>
		</tr>
	</table>
</form>

</body>
</html>