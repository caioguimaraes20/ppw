<?php

require_once "class_numeros.php";

class Numeros2 extends Numeros{
	public function multiplicar(){
		return $this->getN1() * $this->getN2();
	}
}
?>
		
		