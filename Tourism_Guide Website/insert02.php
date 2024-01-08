<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "form_data";
		$conn = mysqli_connect("localhost", "root", "", "form_data");

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$cpassword = $_REQUEST['cpassword'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO registration VALUES ('$first_name',
			'$last_name','$email','$password','$cpassword')";

		if (mysqli_query($conn, $sql)) {
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$email\n $password\n $cpassword");
		} else {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>