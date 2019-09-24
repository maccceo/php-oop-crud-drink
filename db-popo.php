<?php 

class Bevanda {
	private $id;
	private $name;
	private $brand;
	private $price;
	private $expiring_date;

	use DateFunctions;

	// # # COSTRUTTORI E TO_STRING # #
	public function __construct ($row) {
		$this -> setID($row['id']);
		$this -> setName($row['name']);
		$this -> setBrand($row['brand']);
		$this -> setPrice($row['price']);
		$this -> setExpDate($row['expiring_date']);
	}

	public function __toString() {
		return 	"ID: " . $this -> getID() .
				" | Nome bevanda: " . $this -> getName() .
				" | Marca: " . $this -> getBrand() .
				" | Prezzo: " . $this -> getPrice() . "€" .
				" | Scadenza: " . $this -> getExpDate() . "<br>";
	}

	// # # FUNZIONI GET E SET # #
	public function getID() {
		return $this -> id;
	}
	public function setID($id) {
		$this -> id = $id;
	}

	public function getName() {
		return $this -> name;
	}
	public function setName($name) {
		$this -> name = $name;
	}

	public function getBrand() {
		return $this -> brand;
	}
	public function setBrand($brand) {
		$this -> brand = $brand;
	}

	public function getPrice() {
		return $this -> price;
	}
	public function setPrice($price) {
		$this -> price = $price;
	}

	public function getExpDate() {
		return $this -> expiring_date;
	}
	public function setExpDate($expiring_date) {
		$correctDateFormat = $this -> getCorrectDateFormat($expiring_date);
		$this -> expiring_date = $correctDateFormat;
	}

}

trait DateFunctions {
	
	private function getCorrectDateFormat($fullDate) {
		$dateArray = explode('-', $fullDate);
		return $dateArray[1] . "/" . $dateArray[0]; 
	}
}

?>