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


// STAMPA PRODOTTI CREATI: 

var_dump($product_1);
var_dump($product_2);


// STAMPA UTENTE PREMIUM (SFRUTTATO L'UTILIZZO DI EXTEND PER LA CLASSE USER)
$Premium_1 = new Premium ("Andrea", "Mozzi", "Andrexx", "andreamozzi@email.com", "3456757433");

var_dump($Premium_1);
?>
