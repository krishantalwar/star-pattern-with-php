<?php

$m = 5;
$n = 5;

for ($i = 0; $i <= $m; $i++) {
    for ($j = 0; $j <= $n; $j++) {
        if ($i == $j || $i == 0 || $j == $n) {
            echo "*";
        } else {
            echo "9";
        }
    }
    echo "</br>";
}