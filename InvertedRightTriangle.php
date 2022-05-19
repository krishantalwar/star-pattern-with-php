<?php

$m = 5;
$n = 5;

for ($i = 0; $i <= $m; $i++) {
    for ($j = 0; $j <= $n; $j++) {
        if ($j <= $n - $i) {
            echo "*";
        } else {
            echo "9";
        }
    }
    echo "</br>";
}