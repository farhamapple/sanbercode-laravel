<?php

require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');


$sheep = new Animal("shaun");

echo "========== Release 0 =================";
echo "<br>";
echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded; // false

echo "<br>";
echo "========== Release 1.1 =================";
echo "<br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->name;
echo "<br>";
echo $sungokong->legs; // 2
echo "<br>";
echo $sungokong->cold_blooded; // false
echo "<br>";
$sungokong->yell(); // "Auooo"

echo "<br>";

echo "========== Release 1.2 =================";

echo "<br>";

$kodok = new Frog("buduk");
echo $kodok->name;
echo "<br>";
echo $kodok->getLegs(); // 2
echo "<br>";
echo $kodok->getBlooded();
echo "<br>";
$kodok->jump() ; // "hop hop"

?>