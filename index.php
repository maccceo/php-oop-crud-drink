<?php 

include 'db-popo.php';
include 'db-query.php';
include 'db-conn.php';



// -------------------------
// -----STAMPA COMPLETA-----
// -------------------------

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

foreach ($bevande as $bevanda) {
	echo $bevanda;
 }

?>