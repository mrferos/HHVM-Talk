<?hh

$data = range(1,100);

$comparisonFunc = ($a, $b) ==> $a > $b ? -1 : 1;
usort($data, $comparisonFunc);

var_dump($data);