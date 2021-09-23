<?php
// BONUS SNACK
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
// -che name sia più lungo di 3 caratteri,
// -che mail contenga un punto e una chiocciola
// - che age sia un numero.
// -Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
// SUPER BONUS: Personalizzare l'avviso di accesso negato con la motivazione. es: ("Accesso negato: mail non valida")

if (!empty($_GET['name']) && !empty($_GET['mail']) && !empty($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
} else {
    die();
}

if (strlen($name) < 4 || !strpos($mail, '.') || !strpos($mail, '@') || !is_numeric($age)) {
    $text = "Accesso negato";
} else {
    $text = "Accesso riuscito";
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack bonus</title>
</head>

<body>
    <h1><?php echo $text ?></h1>
</body>

</html>