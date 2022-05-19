<?php

$m = 6;
$n = 6;

for ($i = 0; $i <= $m; $i++) {
    for ($j = 0; $j <= $n; $j++) {
        if ($i == $j || $j == $n - $i) {
            if ($i == $j) {
                echo "\\";
            } else {
                echo "/";
            }
        } else {
            echo "*";
        }
    }
    echo "</br>";
}