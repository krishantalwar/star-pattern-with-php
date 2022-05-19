<?php

$m = 5;
$n = 5;

for ($i = 0; $i <= $m; $i++) {
    for ($j = 0; $j <= $n; $j++) {
        if ($i == 0 || $j == 0 || $j == $n - $i) {
            echo "*";
        } else {
            echo "0";
        }
    }
    echo "</br>";
}