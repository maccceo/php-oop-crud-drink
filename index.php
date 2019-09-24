<?php 

include 'db-popo.php';
include 'db-query.php';
include 'db-connection.php';




// --------------------------
// --------PAGAMENTI---------
// --------------------------

// interrogo DB
$res = $conn -> query($query_getAllPagamenti);

$pagamenti = [];
// se ho risultati
if ($res && $res -> num_rows > 0) {

	// passo tutte le righe ricevute
	while ($row = $res -> fetch_assoc()) {
		$pagamenti[] = new Pagamento($row);
	}
}
$price = [];

foreach ($pagamenti as $pagamento) {
	echo $pagamento;
 	$price[] = $pagamento -> getPrice();
 }

echo "<br>";

$maxPrice = max($price);
$minPrice = min($price);
$sumPrice = array_sum($price);

foreach ($pagamenti as $pagamento) {
 	if ($pagamento -> getPrice() == $maxPrice) {
 		echo "<strong>PREZZO MASSIMO: </strong>" . $pagamento;
 	}
 	if ($pagamento -> getPrice() == $minPrice) {
 		echo "<strong>PREZZO MINIMO: </strong>" . $pagamento;
 	}
}
echo "<strong>SOMMA PREZZI: </strong>" . $sumPrice;

echo "<br>----------------------<br>";




// -------------------------
// -----CONFIGURAZIONI------
// -------------------------

// interrogo DB
$res = $conn -> query($query_getAllConfigurazioni);

$configurazioni = [];
// se ho risultati
if ($res && $res -> num_rows > 0) {

	// passo tutte le righe ricevute
	while ($row = $res -> fetch_assoc()) {
		$configurazioni[] = new Configurazione($row);
	}
}
foreach ($configurazioni as $configurazione) {
 	echo $configurazione;
 }

?>