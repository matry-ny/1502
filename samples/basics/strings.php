<?php

echo 'Some string', 1, 'Third string', '<br>', PHP_EOL;
print('Other string<br>');

echo '<pre>';
print_r([1, 2 , 4, 5]);
echo '</pre>';

var_dump(1 + (print(3)));

$year = date('Y');
var_dump('test {$year} test\r\n');
var_dump("test {$year} test\r\n");
$str = <<<JS
alert(1);
JS;
var_dump($str);

