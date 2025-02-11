<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> ';

include "Alunno.php";

$a = new Alunno("Adele", "Baccelli", "18");
$b = new Alunno("Mario", "Rossi", "17");

$alunni = [$a, $b];

foreach($alunni as $x){
    $x -> stampa();
}

/*
for($i=0 ; $i<sizeof($alunni); $i++){
    $alunni[$i] -> stampa();
}*/

echo "
</body>
</html> ";
?>