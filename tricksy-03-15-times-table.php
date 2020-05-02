<?php

for ($i = 1; $i <= 15; $i += 1) {
    $thisLine = "\n";
    for ($j = 1; $j <= 15; $j += 1) {
        $thisLine .= ($i * $j) . "\t";
    }
    echo $thisLine;
}
