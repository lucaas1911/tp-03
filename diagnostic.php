<?php

$services = ["Apache", "PostgreSQL", "Redis"];

foreach ($services as $service) {
    echo "<pre>";
    print_r($services);
    echo "</pre>";
}

echo "<hr>";

$chargesCpu = [
    "srv-web-01" => 45,
    "srv-bdd-01" => 92,
    "srv-cache-01" => 76
];

$nombreAlertes = 0;

foreach ($chargesCpu as $chargeCpu) {
    echo "Serveur : " . $chargeCpu . " %<br>";

    if ($chargeCpu < 70) {
        $nombreAlertes++;
    }
}

echo "Nombre d'alertes : " . $nombreAlertes;
