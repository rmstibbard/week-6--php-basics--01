<?php
/* Write some code that var_dumps the sum of the first 117 multiples of either 3 or 7. 
e.g. 3 + 6 + 7 + 9 + 12 + 14 + 15 + 18 + 21 + 24 ...
The answer should be int(16107). */

$counter = 0;
$total = 0;

// Key is to use a counter variable which increments 
// only when loop finds a multiple of 3 or 7
for ($i = 1; $i <= 400; $i += 1) {
    if (($i % 3 === 0) || ($i % 7 === 0)) {
        $counter += 1;
        if ($counter <= 117) {
            $total += $i;
        }
    }
}
var_dump($total);
