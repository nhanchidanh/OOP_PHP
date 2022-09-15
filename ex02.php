<?php
require_once'classes/Calculator.php';
$calc = new Calculator;
// var_dump($calc->demoThis());

// echo $calc->makeAdd(1,3);

$calc->setNumberA(10);
$calc->setNumberb(20);
// $total = $calc->makeAdd($calc->getNumberA(), $calc->getNumberB());
$calc->setNumberA(100);
$calc->setNumberB(200);
$total = $calc->makeAdd();
$calc->showShortResult($total);