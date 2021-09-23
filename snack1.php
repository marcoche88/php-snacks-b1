<?php
// SNACK 1
// Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.

function get_array_random_number()
{
    $numbers = [];
    while (count($numbers) < 15) {
        $random_number = rand(1, 100);
        if (!in_array($random_number, $numbers)) {
            $numbers[] = $random_number;
        }
    };
    return $numbers;
}

$numbers = get_array_random_number();

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <ul>
        <?php foreach ($numbers as $number) {
            echo "<li> $number </li>";
        }
        ?>
    </ul>
</body>

</html>