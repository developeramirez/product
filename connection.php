<?php 

$conn= mysqli_connect('localhost','root','password');
if(!$conn){
	die("Conexion Fallida".mysqli_error($conn));

}
$select_db = mysqli_select_deb($conn,'product');
if(!$select_db){
	die("Error de Base de DAtos" . mysqli_error($conn));
}
?>
