<?php
/**
 * Made as an extra to show the speed differences in certain operations
 * that achieve the same end result.
 *
 * TODO: Get the PHP opcodes generated from the below
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



