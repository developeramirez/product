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
		$sql = "select * from product";

		if($conn){
			$result = $conn->query($sql);
			echo"<table>";
			echo "<tr>";

			echo "<td>Nombre Producto";
			
			echo "</td>";
			echo "<td>Precio" ;
			
			echo "</td>";
			echo "<td>Estado" ;
			
			echo "</td>";
			echo "</tr>";
			echo "<tr>";

			
			
			foreach ($result as $value) {
				
				echo "<tr>";

				echo "<td>";
				echo "<br>" . $value["product_name"];
				echo "</td>";

				echo "<td>";
				echo "<br>" . $value["price"];
				echo "</td>";

				echo "<td>";
				echo "<br>" . $value["is_active"];
				echo "</td>";
				echo "<td><input type='submit' value='modificar'>";
			
				echo "</td>";
				echo "</td>";
				echo "<td><input type='submit' value='Eliminar'>";
			
				echo "</td>";
				
				echo "</tr>";
			}
			
			echo"</table>";
		}
			else{
				echo "no hay nada";
			}
	}catch(PDOException $e){
		echo $sql . $e->getMessage();

	}
	$conn = null;

	?>
</body>
</html>