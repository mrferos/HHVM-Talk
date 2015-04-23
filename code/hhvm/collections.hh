<?hh

$time = microtime();
$data = array();
for ($i = 0; $i <= 1000000; ++$i) {
    $data[] = $i;
}
echo microtime() - $time, "\n";

unset($data);

$time = microtime();
$data = new Vector;
for ($i = 0; $i <= 1000000; ++$i) {
    $data->add($i);
}
echo microtime() - $time, "\n";


