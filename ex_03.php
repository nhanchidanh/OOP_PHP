<?php
require_once 'classes/Calculator.php';
// use Demo\Calculator;
$calc = new Calculator();

//kt thuoc tinh ton tai
//Cach 1 kt bang ham isset hoac empty
if(isset($calc->numberC)) {
    echo $calc->numberC;
}else echo "Khong ton tai numberC";

echo '<hr>';
//Cach 2: kt bang ham
if(property_exists('Calculator', 'numberC')) {
    echo $calc->numberC;
}else {
    echo 'Thuoc tinh khong ton tai';
}
echo '<hr>';
//Kiem tra phuong thuc ton tai
if(method_exists($calc, 'showMsg')) {
    echo $calc->showMsg();
}else {
    echo 'phuong thuc kh ton tai';
}

echo '<hr>';
$clasName = Calculator::class;
echo 'Ten class la:'. $clasName;