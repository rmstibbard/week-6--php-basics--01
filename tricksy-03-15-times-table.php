<?php

for ($i = 1; $i <= 15; $i += 1) {
    $thisLine = ($i > 1) ? "\n" : "";
    for ($j = 1; $j <= 15; $j += 1) {
        $thisLine .= ($i * $j) . "\t";
    }
    echo $thisLine;
}
