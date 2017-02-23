<?php 

	class Proizvod{

		public $naziv;
		public $opis;
		public $slika;
		public $cena;

		function __construct($naziv, $opis, $slika, $cena){
			$this->naziv = $naziv;
			$this->opis = $opis;
			$this->slika = $slika;
			$this->cena = $cena;
		}



	}





 ?>