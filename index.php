<?php
// spl_autoload_register(function ($class) {
//     include $class . '.php';
// });

// use App\Animal as anml;
// use App\Ape as Ape;
// use App\Frog as Frog;

require_once "animal.php";
require_once "Ape.php";
require_once "Frog.php";

$sheep = new Animal('shaun');

echo $sheep->name . "<br>";
echo $sheep->legs . "<br>";
echo $sheep->cold_blooded . "<br>";
echo "<hr>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<hr>";
$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"
// echo $kodok->legs;
