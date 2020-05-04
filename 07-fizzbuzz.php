<?php

// 1. With if ... else not very good
// as cannot easily add more words
for ($i = 1; $i <= 100; $i += 1) {
    if (($i % 5 === 0) && ($i % 3 === 0)) {
        echo "FizzBuzz\n";
    } else if ($i % 3 === 0) {
        echo "Fizz\n";
    } else if ($i % 5 === 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}

// 2. Much better solution used ternary statements 
//  as can easily add any number of words 
// (Dan's or Kieran's answer):
for ($i = 1; $i <= 100; $i += 1) {
    $result = ($i % 3 === 0) ? "Fizz\n" : "";
    $result .= ($i % 5 === 0) ? "Buzz\n" : "";
    $result .= ($i % 7 === 0) ? "Splat\n" : ""; // Optional splats and booms
    $result .= ($i % 11 === 0) ? "Boom\n" : "";
    echo ($result !== "") ? $result  : $i . "\n";
}
