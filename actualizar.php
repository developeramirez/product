<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>

<?php
$servername= "localhost";
$username= "root";
$password = "captan123@*";
$dbname = "products";

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$is_active = $_POST['is_active'];
$id = $_GET['id'];

try {

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "select * from product where id='$id'";

		if($conn){
			$result = $conn->query($sql);	
		}
			else{
				echo "no hay nada";
			}

	$sql = "update product set product_name='$product_name', price = '$price', is_active = '$is_active' where id='$id' ";
	$conn -> query($sql);
} catch (PDOException $e) {
	echo $e;
}




?>
</body>
</html>