<?php 
$servername= "localhost";
$username= "root";
$password = "captan123@*";
$dbname = "products";

try{

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

}catch(PDOException $e){
	echo $sql . $e->getMessage();

}
$conn = null;

 ?>