<?php

// 1. With if ... else:
for ($i = 1; $i <= 100; $i += 1) {
    if (($i % 5 === 0) && ($i % 3 === 0)) {
        echo "FizzBuzz\n";              // Cannot easily add more words
    } else if ($i % 3 === 0) {
        echo "Fizz\n";
    } else if ($i % 5 === 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}

// 2. Better with ternary statements as can easily add more funny words (?Dan's or Kieran's answer??):
for ($i = 1; $i <= 100; $i += 1) {
    $result = $i % 3 === 0 ? "Fizz\n" : "";
    $result .= $i % 5 === 0 ? "Buzz\n" : "";
    $result .= $i % 7 === 0 ? "Splat\n" : ""; // Optional splats and booms
    $result .= $i % 11 === 0 ? "Boom\n" : "";
    echo $result !== "" ? $result  : $i . "\n";
}
