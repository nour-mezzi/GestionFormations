<?php
$formations = ["Développement Web", "Réseaux", "Sécurité", "Base de données"];
foreach ($formations as $formation) {
    echo $formation . "<br>";
}
$utilisateur = [
    "nom" => "Mezzi",
    "prenom" => "Rania",
    "email" => "rania@email.com",
    "formation" => "Développement Web",
    "age" => 20
];

if ($utilisateur["age"] <= 0) {
    echo "L'âge doit être supérieur à 0.<br>";
} else {
    echo "Bienvenue " . $utilisateur["prenom"] . " " . $utilisateur["nom"] . "<br>";
}
echo "Nom : " . $utilisateur["nom"] . "<br>";
echo "Prénom : " . $utilisateur["prenom"] . "<br>";
echo "Email : " . $utilisateur["email"] . "<br>";
echo "Formation : " . $utilisateur["formation"] . "<br>";
echo "Âge : " . $utilisateur["age"] . "<br>";
$formations = [
    ["nom" => "Développement Web", "duree" => "3 mois"],
    ["nom" => "Réseaux", "duree" => "2 mois"],
    ["nom" => "Sécurité", "duree" => "4 mois"]
];
foreach ($formations as $f) {
    echo "Formation : " . $f["nom"] .
    " - Durée : " . $f["duree"] . "<br>";

}
