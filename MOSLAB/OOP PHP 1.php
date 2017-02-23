<?php 
	require 'OOP PHP.php';
	require 'connection.php';


	function uzmiIzBaze(){
		global $connection;

		$upit = "SELECT * FROM proizvod";
		$query = mysqli_query($connection, $upit);

		while($row = mysqli_fetch_array($query)){
			$name = $row['name'];
			$opis = $row['opis'];
			$slika = $row['slika'];
			$cena = $row['cena'];

			$proizvod = new Proizvod($name, $opis, $slika, $cena);

			
			echo '<div class="box">
			 		<div class="naziv">'.$proizvod->naziv.'</div>
			 		<div class="opis">'.$proizvod->opis.'</div>
			 		<div class="slike">'.$proizvod->slika.'</div>
			 		<div class="cena"><button class="proizDugme" style="vertical-align:middle"><span>Poruci </span></button>'.$proizvod->cena.'</div>
			 	</div>'	;	

		}
		
	}


	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <link rel="stylesheet" type="text/css" href="stil.css">
 	<title></title>
 </head>
 <body>
 <div id="mainContainer">
 	<?php uzmiIzBaze(); ?>
 </div>	
 </body>
 </html>