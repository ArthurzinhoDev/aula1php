<?php


$valores = [10, 20, 30, 40];
$soma = 0;

for ($i = 0; $i < count($valores); $i++) {
    $soma += $valores[$i];
}

echo "valores do array: $valores.<br> soma total dos elementos é: $soma<br>";
?>