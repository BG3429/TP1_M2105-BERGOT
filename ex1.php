<?php
function addition($a,$b){
		return $a+$b;
}
function soustraction($a,$b){
		return $a-$b;
}
function multiplication($a,$b){
		return $a*$b;
}
function division($a,$b){
		return $a/$b;
}

$v1=12;
$v2=37;

echo "Addition de $v1 et $v2 ";
echo "<hr>";
echo addition($v1,$v2);

echo "<br>";
echo "<br>";
echo "<br>";

echo "Soustraction de $v1 par $v2 ";
echo "<hr>";
echo soustraction($v1,$v2);

echo "<br>";
echo "<br>";
echo "<br>";

echo "Multiplication de $v1 et $v2 ";
echo "<hr>";
echo multiplication($v1,$v2);

echo "<br>";
echo "<br>";
echo "<br>";

echo "Division de $v1 par $v2 ";
echo "<hr>";
echo division($v1,$v2);





?>