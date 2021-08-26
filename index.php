<?php
require_once("animal.php");
require_once("Ape.php");
require_once("Frog.php");

$sheep = new Animal("shaun");

echo "Name : ".$sheep->name."<br>"; // "shaun"
echo "Legs : ".$sheep->legs."<br>"; // 4
echo "Cold blooded\t: ".$sheep->cold_blooded."<br><br>"; // "no"

$kodok = new Frog("buduk");
echo "Name : ".$kodok->name."<br>"; // "buduk"
echo "Legs : ".$kodok->legs."<br>"; // 4
echo "Cold blooded\t: ".$kodok->cold_blooded."<br>"; // "no"
echo "Jump : ".$kodok->jump()."<br><br>"; // "hop hop"

$sungokong = new Ape("kera sakti");
echo "Name : ".$sungokong->name."<br>"; // "kera sakti"
echo "Legs : ".$sungokong->legs."<br>"; // 2
echo "Cold blooded\t: ".$sungokong->cold_blooded."<br>"; // "no"
echo "Yell : ".$sungokong->yell()."<br><br>"; // "Auooo"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>