<?php
	$name = $_POST['name'];
	$file = $_POST['file'];

	// Database connection
	$conn = new mysqli('localhost','root','','files');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into imports(name, file) values(?, ?)");
		$stmt->bind_param("ss", $name,);
		$execval = $stmt->execute();
		echo $execval;
		echo "تم التسجيل بنجاح";
		$stmt->close();
		$conn->close();
	}
