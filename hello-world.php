<?php
echo "Hello World!";

$a = 5;
$b = 3;

echo 'The sum of '.$a.' and '.$b.' is '.add($a,$b);
echo '<br /> Difference between '.$a.' and '.$b.' is '.sub($a,$b);

function add($a, $b){
  return $a + $b;
}

function sub($a, $b){
  return $a - $b;
}
?>
