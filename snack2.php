<?php
// SNACK 2
// Creare un array contenente qualche alunno di un’ipotetica classe.
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
// Stampare Nome, Cognome e la media dei voti di ogni alunno.

$students = [
    [
        'name' => 'Luca',
        'lastname' => 'Rossi',
        'grades' => [6, 8, 5, 6],
    ],
    [
        'name' => 'Mario',
        'lastname' => 'Bianchi',
        'grades' => [4, 6, 6, 5],
    ],
    [
        'name' => 'Luisa',
        'lastname' => 'Verdi',
        'grades' => [8, 8, 7, 7],
    ],
    [
        'name' => 'Sara',
        'lastname' => 'Marroni',
        'grades' => [5, 6, 7, 9],
    ],
];

function get_average($arr)
{
    $sum = 0;
    foreach ($arr as $number) {
        $sum += $number;
    }
    $average = $sum / count($arr);
    return number_format($average, 2, '.', '');
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <?php foreach ($students as $student) : ?>
        <h3><?php echo $student['name'] . ' ' . $student['lastname'] ?></h3>
        <em>Media Voti: <?php echo get_average($student['grades']) ?></em>
        <hr>
    <?php endforeach; ?>
</body>

</html>