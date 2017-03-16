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

function operation($a,$b,$op){
		switch($op){
			case "addition":
				return(addition($a,$b));
				break;
				
			case "soustraction":
				return(soustraction($a,$b));
				break;
				
			case "multiplication":
                return(multiplication($a,$b));
				break;
					
			case "division":
                return(division($a,$b));
				break;
		}
}

        echo "v1 = {$v1} et v2 = {$v2} <br>";
        echo "Addition : ".operation($v1,$v2,"addition")."<br>";
        echo "Soustraction : ".operation($v1,$v2,"soustraction")."<br>";
        echo "Multiplication : ".operation($v1,$v2,"multiplication")."<br>";
        echo "Division : ".operation($v1,$v2,"division")."<br>";

?>