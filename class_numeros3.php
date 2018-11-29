<?php

require_once "class_numeros2.php";

class Numeros3 extends Numeros2{
	public function Numeros3($n1,$n2){
		$this->setN1($n1);
		$this->setN2($n2);
	}

	public function dividir(){
		return $this->getN1() / $this->getN2();
	}
	
}
?>
		
		