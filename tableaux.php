<?php
$serveurs = ["srv-web-01", "srv-bdd-01", "srv-cache-01"];
echo "<pre>";
print_r($serveurs);
echo "</pre>";

$serveurs[] = "srv-fichiers-01";

echo "Nombre de serveurs : " . count($serveurs);

$chargesCpu = [
    "srv-web-01" => 45,
    "srv-bdd-01" => 82,
    "srv-cache-01" => 28
];
echo "<pre>";
print_r($chargesCpu);
echo "</pre>";
echo "Charge de srv-bdd-01 : " . $chargesCpu["srv-bdd-01"] . " %";