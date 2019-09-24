<?php 

include 'db-popo.php';
include 'db-query.php';
include 'db-conn.php';



// - - - STAMPA COMPLETA - - -

// interrogo DB
$res = $conn -> query($query_getAllBeverages);

$bevande = [];
// se ho risultati
if ($res && $res -> num_rows > 0) {

	// passo tutte le righe ricevute
	while ($row = $res -> fetch_assoc()) {
		$bevande[] = new Bevanda($row);
	}
}

// stampa
foreach ($bevande as $bevanda) {
	echo $bevanda;
 }


// - - - CALCOLO MIN, MAX E SUM - - -

// init variabili
$minPrice = $bevande[0] -> getPrice();
$maxPrice = $bevande[0] -> getPrice();
$sumPrice = 0;
$arrayLength = sizeof($bevande);

for ($i = 0; $i < $arrayLength; $i++) { 
	$bevanda = $bevande[$i];

	if ($bevanda -> getPrice() > $maxPrice) {
		$maxPrice = $bevanda -> getPrice();
		$indexMaxPrice = $i;
	} elseif ($bevanda -> getPrice() < $minPrice) {
		$minPrice = $bevanda -> getPrice();
		$indexMinPrice = $i;
	}
	$sumPrice += $bevanda -> getPrice();
}

echo 	"<br>Prezzo massimo: <strong>"
		. $bevande[$indexMaxPrice] -> getName()
		. " costa "	. $maxPrice
		. "</strong>€<br>Prezzo minimo: <strong>"
		. $bevande[$indexMinPrice] -> getName()
		. " costa "	. $minPrice
		. "</strong>€<br>Somma dei prezzi: <strong>" .$sumPrice . "€</strong>";
?>