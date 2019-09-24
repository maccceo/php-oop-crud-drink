<?php 

class Bevanda {
	private $id;
	private $name;
	private $brand;
	private $price;
	private $expiring_date;

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
		return $this -> expiring_adte;
	}
	public function setExpDate($expiring_adte) {
		$this -> expiring_adte = $expiring_adte;
	}


	// # # COSTRUTTORI E TOSTRING # #
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
				" | Data di scadenza: " . $this -> getExpDate() . "<br>";
	}
}

?>