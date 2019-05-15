<?php 
$servername= "localhost";
$username= "root";
$password = "captan123@*";
$dbname = "products";


$product_name = $_POST["product_name"];
$price = $_POST["price"];
$is_active = $_POST["is_active"];


try{

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO product (id,product_name,price,is_active)  values (null, '$product_name','$price','$is_active')";
	$conn -> exec($sql);
	echo "correcto";
	header('Location: index.html');

}catch(PDOException $e){
	echo $sql . $e->getMessage();

}
$conn = null;

 ?>