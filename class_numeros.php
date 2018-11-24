<?php

	class Numeros{
		private $n1,$n2;
		
		public function getN1(){
			return $this->n1;
		}
		
		public function setN1($n1){
			$this->n1=$n1;
		}
		
		public function getN2(){
			return $this->n2;
		}
		
		public function setN2($n2){
			$this->n2=$n2;
		}
		
		public function somar(){
			return $this->n1 + $this->n2;
		}
		
		public function subtrair(){
			return $this->n1 - $this->n2;
		}
	}
?>
		
		