<?php
echo "Hello World!";
$formations= ["Développement Web", "Réseaux", "Sécurité","Base de donées"];
echo "<h2>Parcourir et affichage avec la boucle foreach </h2><br>";
echo "<ul>";
foreach ($formations as $formation) {
    echo "<li>$formation</li>";
}
echo "</ul>";
echo "<h2>Parcourir et affichage avec la boucle for </h2><br>";
for ($i = 0; $i < count($formations); $i++) {
echo $formations[$i] . " | ";
}
echo "<h2>Parcourir et affichage avec la boucle while </h2><br>";
$i=0;
while ($i < count($formations) ) {
echo $formations[$i] . " | ";
$i++;
}
echo "<h2>Tableau associatif </h2><br>";
$utilisateur = [
"prénom"=>"Rania",
"nom"=>"Mezzi",
"age" => 20];
echo "Informations utilisateur : <br>";
foreach ($utilisateur as $key => $value) {
echo $key." : ". $value. "<br>";
}
?>
