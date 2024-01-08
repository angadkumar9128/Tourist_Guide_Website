<!DOCTYPE html>
<html>

<head>
	<title>Insert Page </title>
</head>

<body>
	<center>
		<?php

		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "form_data";
		$conn = mysqli_connect("127.0.0.1", "root", "", "form_data");

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)

		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO login VALUES ('$email',
			'$password')";

		if (mysqli_query($conn, $sql)) {
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$email\n $password ");
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