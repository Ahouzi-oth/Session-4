<?php
$montant = 500;
$remise = 0;

if ($montant>=500){

if ($montant>=500 && $montant<=999) {
     $remise = 0.05;

} elseif ($montant>=1000 && $montant<=1999) {
    $remise = 0.10;

} else  {
    $remise = 0.15;

}
}

$montantremise=$montant*$remise;
$montantpayer=$montant-$montantremise;

echo "montant de la remise est : " . $montantremise . "<br>";
echo "montant à payer est : " . $montantpayer ;