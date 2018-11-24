<?php
include "class_numeros2.php";

$n = new Numeros2();
$n->setN1(10);
$n->setN2(30);

echo $n->somar()."</br>";
echo $n->multiplicar();
?>