<?php
$chargesCpu = [
    "srv-web-01" => 45,
    "srv-bdd-01" => 92,
    "srv-cache-01" => 28,
    "srv-fichiers-01" => 76
];
$nombreServeurs = 0;
$nombreAlertes = 0;
$totalCharges = 0;
foreach ($chargesCpu as $nomServeur => $chargeCpu) {
    $nombreServeurs++;
    $totalCharges += $chargeCpu;
    if ($chargeCpu >= 70) {
        $nombreAlertes++;
        echo "Alerte sur " . $nomServeur . "<br>";
    }

}
$chargeMoyenne = $totalCharges / $nombreServeurs;
echo "Serveurs : " . $nombreServeurs . "<br>";
echo "Alertes : " . $nombreAlertes . "<br>";
echo "Charge moyenne : " . $chargeMoyenne . " %";