<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','sql112.eb2a.com');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into ass(email, password) values(?, ?)");
		$stmt->bind_param("ss", $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo 'error';
		$stmt->close();
		$conn->close();
	}
?>

