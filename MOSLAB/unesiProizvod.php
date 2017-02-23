<?php 
	require "connection.php";
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>unesi proizvod</title>
 </head>
 <body>
 	<form method="POST" action="unesiProizvod.php" >
 		<input type="text" name="nazivProizvoda"><br><br>
 		<input type="text" name="opisProizvida"><br><br>
 		<input type="file" name="slikaProizvoda"><br><br>
 		<input type="number" name="cenaProizvoda"><br><br>
 		<input type="submit" name="unesi" value="Unesi">
 	</form>

 </body>
 </html>
<?php 
	if (isset($_POST['unesi'])) {
		global $connection;
		$naziv = $_POST['nazivProizvoda'];
		$opis = $_POST['opisProizvida'];
		$slikaProizvoda = $_FILES['slikaProizvoda']['name'];
		$slikaProizvoda_temp = $_FILES['slikaProizvoda']['tmp_name'];
		$cena = $_POST['cenaProizvoda'];

		move_uploaded_file($slikaProizvoda_temp, "slike_tmp/$slikaProizvoda");

		$upit = "INSERT INTO proizvod ('name', 'opis', 'slika', 'cena') VALUES ('$naziv', '$opis', '$slikaProizvoda', '$cena')";

		$query = mysqli_query($connection, $upit);

		if ($query) {
			echo "<script>alert('Product has been inserted')</script>";;
		} else {
			echo "nije uspelo!";
		}


	}
 ?>