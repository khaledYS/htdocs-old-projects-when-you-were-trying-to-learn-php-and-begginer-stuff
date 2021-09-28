<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>insert.php</title>
  </head>
  <body>
	  <?php
	  include('connect.php');
	  
	  
	  $title = $_POST['Email'];
	  $arth = $_POST['Pass'];
	  
	  $sql="INSERT INTO article VALUES('', '$title', '$arth', now())";
	  if(mysqli_query($conn , $sql){
		echo "hello";
	  }
	  ?>rk9fj
  </body>
</html>