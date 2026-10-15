<?php
$chargesCpu = [
    "srv-web-01" => 45,
    "srv-bdd-01" => 92,
    "srv-cache-01" => 28,
    "srv-fichiers-01" => 76
];
foreach ($chargesCpu as $nomServeur => $chargeCpu) {
    if ($chargeCpu >= 90) {
        echo $nomServeur . " : CRITIQUE<br>";
    } elseif ($chargeCpu >= 70) {
        echo $nomServeur . " : SURVEILLANCE<br>";
    } else {
        echo $nomServeur . " : NORMAL<br>";
    }
}