<?php

/**
 * Bit shifting
 */

echo "Multiplication\n";
$t = microtime(true);
for($i = 0; $i < 100000; ++$i) {
	$d = 2 * 2;
}
echo (microtime(true) - $t), "\n\n";

echo "Addition\n";
$t = microtime(true);
for($i = 0; $i < 100000; ++$i) {
	$d = 2 + 2;
}
echo (microtime(true) - $t), "\n\n";

echo "Bit shifting\n";
$t = microtime(true);
for($i = 0; $i < 100000; ++$i) {
	$d = 2 << 1;
}
echo (microtime(true) - $t), "\n\n";

/**
 * Avoiding load stores
 */

echo "Load Storing\n";
$time = microtime(true);
for ($i = 0; $i < 100000; ++$i) {
    $a = $i + 5;
    $e = $a + 2;
}
echo (microtime(true) - $t), "\n\n";

echo "Without Load Storing\n";
$time = microtime(true);
for ($i = 0; $i < 100000; ++$i) {
    $e = $i + 5 + 2;
}
echo (microtime(true) - $t), "\n\n";
