<?php

$m = 5;
$n = 5;

for ($i = 0; $i <= $m; $i++) {
    for ($j = 0; $j <= $n; $j++) {
        if ($j == $n || $j == $n - $i || $i == $n) {
            echo "*";
        } else {
            echo "0";
        }
    }
    echo "</br>";
}