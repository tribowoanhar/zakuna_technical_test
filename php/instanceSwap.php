<?php

include "swap.php";

if(($_POST["a"] == "") || ($_POST["b"] == "")){
	echo "DATA KOSONG, TIDAK DAPAT MEMPROSES";
} else {

	$object = new Swap;

	$object->setAValue();
	$object->setBValue();

	$object->swapValue();

	echo "Variabel A : ".$object->getAValue()."<br>";
	echo "Variabel B : ".$object->getBValue();
}

?>