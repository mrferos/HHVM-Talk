<?php

$x = array();
$y = array();
$z = array();
for ($i = 0; $i < 100000; ++$i) {
    $x[] = rand(1, 10000);
    $y[] = rand(1, 10000);
    $z[] = rand(1, 10000);
}

/**
 *
 */

$time = microtime();
$p = 0;
for ($i = 0; $i < 100000; $i++) {
    $e = $x[$i] + $y[$i] + $z[$p];
    $p = $i;
}

echo "Time with variable redefinition " . (microtime() - $time) . "\n";

$time = microtime();
$e = $x[0] + $y[0] + $z[0];
for ($i = 1; $i < 100000; $i++) {
    $e = $x[$i] + $y[$i] + $z[$i-1];
}

echo "Time after peeling " . (microtime() - $time) . "\n";

/**
 * Loop Inversion
 */


$i = 0;
$time = microtime();
while ($i < 500) {
    $i = $x[$i];
    ++$i;
}
echo "Time with a while " . (microtime() - $time) . "\n";

$i = 0;
$time = microtime();
if ($i < 500) {
    do {
        $i = $x[$i];
        ++$i;
    } while ($i < 500);
}
echo "Time after peeling " . (microtime() - $time) . "\n";
