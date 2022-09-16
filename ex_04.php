<?php
require_once 'classes/Calculator.php';
$calc = new Calculator();

$calc->setUsername('nguyen van a');
$calc->setPassword(('danh123'));
echo '<hr>';
echo $calc->getUsername();
echo '<br>';
echo $calc->getPassword();
echo '<hr>';
