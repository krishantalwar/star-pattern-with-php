<?php

$m = 6;
$n = 6;

for ($i = 0; $i <= $m; $i++) {
    for ($j = 0; $j <= $n; $j++) {
        if ($i == 0 || $i == $n ||  $i == $j || $j == $n - $i || $j == 0 || $j == $n) {
            echo "*";
        } else {
            echo "8";
        }
    }
    echo "</br>";
}