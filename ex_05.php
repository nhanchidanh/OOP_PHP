<?php
require 'classes/Calculator.php';
require 'classes/Math.php';
$config = [
    'baseUpload' => './upload',
    'allowFile' => 'jpg',
    'maxSize' => '1024kb'
];
$calc = new Calculator($config);
echo '<br>';
echo $calc->showMsg();
echo '<br>';

echo $calc->numberC;
echo '<br>';

echo $calc->sqrt(2.5) . '<br>';