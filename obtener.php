<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




	<?php
	$servername= "localhost";
	$username= "root";
	$password = "captan123@*";
	$dbname = "products";

	try{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "select * from product where id='$id'";

	}catch(PDOException $e) {

	}


	


	?>

</body>
</html>