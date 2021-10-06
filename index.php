<?php 

/* 
ESERCIZIO:

Provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti 
*/

require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Product.php';

$product_1 = new Product("Quaderno", "Quaderno a righe con copertina blu", "Cancelleria", 2.00, 3.99);
$product_2 = new Product("Sciarpa", "Sciarpa blu di lana a quadri", "Indumenti invernali", 16.45, 5.75);

var_dump($product_1);
var_dump($product_2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio OOP 2</title>
</head>
<body>
    <!-- CONTENUTO CHE VOGLIO EVENTUALMENTE STAMPARE -->
</body>
</html>