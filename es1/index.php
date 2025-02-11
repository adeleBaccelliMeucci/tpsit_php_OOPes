<?php
header("Content-Type: application/json");
include "Alunno.php";

$a = new Alunno("Adele", "Baccelli", "18");
$b = new Alunno("Mario", "Rossi", "17");

$alunni = [$a, $b];

/*
foreach($alunni as $x){
    $x -> stampa();
}*/


echo json_encode($alunni);


?>