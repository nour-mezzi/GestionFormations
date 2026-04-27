<?php
function message($msg, $name) {
    echo "<strong>--- Message ---</strong><br>";
    echo "$msg! $name<br><br>";
}

message("Bonjour", "Ranya");
echo "<strong>--- Caractères ---</strong><br>";
echo "ASCII de 'r' : " . ord("r") . "<br>";
echo "Caractère pour 82 : " . chr(82 ) . "<br><br>";

echo "<strong>--- Chaînes de caractères ---</strong><br>";
echo "Longueur : " . strlen("Bonjour Ranya!") . "<br>"; 
echo "Position de 'Ranya' : " . strpos("Bonjour Ranya!", "Ranya") . "<br>";
echo "Remplacement : " . str_replace("Ranya", "Mezzi", "Bonjour Ranya!") . "<br>";
echo "Minuscule : " . strtolower("BONJOUR RANYA!") . "<br>"; 
echo "Majuscule : " . strtoupper("bonjour ranya!") . "<br>"; 

$chaine = " Bonjour Ranya!   ";
echo "Après trim : '" . trim($chaine) . "'<br><br>";
echo "<strong>--- Math ---</strong><br>";
$nombrel = -24;
echo "Valeur absolue : " . abs($nombrel) . "<br>"; 

$nombre2 = 114;
echo "Racine carrée : " . sqrt($nombre2) . "<br>"; 

$nombre3 = 3.14159265359;
echo "Arrondi : " . round($nombre3, 2) . "<br>"; 

echo "Nombre aléatoire : " . rand(1, 10). "<br><br>"; 
echo "<strong>--- Date ---</strong><br>";
echo "Date valide ? : ";
var_dump(checkdate(01, 24, 2026));
echo "<br>";

echo "Date actuelle : " . date("d/m/Y") . "<br>";
echo "Timestamp : " . time() . "<br>";

?>