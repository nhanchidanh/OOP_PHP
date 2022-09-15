<?php
class Calculator
{
   var $numberA = 1, $numberB = 2; //su dung var de khai bao cac thuoc tinh(default)
   // public $numberB=2;

   //khai bao hang so
   const _MSG_CONTENT = 'Ket qua: {value}';
   //khai bao phuong thuc
   public function makeAdd($valA, $valB)
   {
      $result = $valA + $valB;
      return $result;
   }
   public function makeMinus($valA, $valB)
   {
      $result = $valA - $valB;
      return $result;
   }
   public function makeMultiply($valA, $valB)
   {
      $result = $valA * $valB;
      return $result;
   }
   public function makeDivide($valA, $valB)
   {
      if ($valB > 0) {
         $result = $valA / $valB;
         return $result;
      }
      return "Khong chia cho so 0";
   }

   public function showResult($msg, $value) {
      echo str_replace('{value}', $value, $msg);
   }

   public function showShortResult($value) {
      $msg = $this::_MSG_CONTENT;
      $this->showResult($msg, $value);
   }
}

//KHoi tao doi tuong
$calc = new Calculator();

//lay gia tri thuoc tinh
echo $calc->numberA;
echo '<br>';
echo $calc->numberB;

echo '<hr>';

//Gan gia tri moi cho thuoc tinh
$calc->numberA = 10;
$calc->numberB = 20;
echo $calc->numberA;
echo '<br>';
echo $calc->numberB;

echo '<hr>';
echo $calc->makeAdd($calc->numberA, $calc->numberB);

echo '<hr>';

echo Calculator::_MSG_CONTENT;

echo '<hr>';
echo '<h3>Thong bao ket qua</h3>';
$total = $calc->makeAdd($calc->numberA, $calc->numberB);
// $calc->showResult($calc::_MSG_CONTENT, $total);

$calc->showShortResult($total);