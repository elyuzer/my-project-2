<?php
echo "Hello World!";

$a = 5;
$b = 3;

echo '<br />The sum of '.$a.' and '.$b.' is '.add($a,$b);
echo '<br />Difference between '.$a.' and '.$b.' is '.sub($a,$b);
echo '<br />The product of '.$a.' and '.$b.' is '.multiply($a, $b);

function add($a, $b){
  return $a + $b;
}

function sub($a, $b){
  return $a - $b;
}

function multiply(){
  return $a * $b;
}
?>
