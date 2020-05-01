<?php
/* Write some code that outputs any even numbers between 1 and 50 that are also divisible by 3

Example output:

int(6)
int(12)
int(18)
int(24)
...
int(48)
*/

for($i = 2; $i <= 50; $i += 2) {
    if ($i % 3 === 0 ) {  // I don't really like ternary statements
        var_dump($i);
    }
}

// or, quicker to run as less iterations: 
for($i = 0; $i <= 50; $i += 6) {
    if ($i > 1 ) {
        var_dump($i);
    }
}