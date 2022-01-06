<!DOCTYPE html>
<html>

<head>
	<title>Inserção de dados</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "fsjoalharia");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$nome = $_REQUEST['nome'];
		$login = $_REQUEST['login'];
		$mail = $_REQUEST['mail'];
		$password = $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is utilizador
		$sql = "INSERT INTO utilizador VALUES ('$nome',
			'$login','$mail','$password')";



		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$nome\n $login\n "
				. "$mail\n $password");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
