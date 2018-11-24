<?php
include "class_numeros.php";

$num = new Numeros();
$num->setN1(2);
$num->setN2(3);
echo "Soma: ".$num->somar();
?>