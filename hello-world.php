<?php
echo "Hello World!";

$a = 5;
$b = 3;

echo 'The sum of '.$a.' and '.$b.' is '.add($a,$b);

function add($a, $b){
  return $a + $b;
}

?>
