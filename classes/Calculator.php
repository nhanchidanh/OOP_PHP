<?php
class Calculator
{
   var $numberA , $numberB ; //su dung var de khai bao cac thuoc tinh(default)
   // public $numberB=2;

   //khai bao hang so
   const _MSG_CONTENT = 'Ket qua: {value}';

   //phuong thuc gan gia tri cho numberA thuoc tinh
   public function setNumberA($value) {
      $this->numberA = $value;
   }
   public function setNumberB($value) {
      $this->numberB = $value;
   }

   //Phuong thuc lay gia tri thuoc tinh
   public function getNumberA() {
      return $this->numberA;
   }

   public function getNumberB() {
      return $this->numberB;
   }

   public function setParams($valA, $valB) {
      
   }

   //khai bao phuong thuc
   public function makeAdd($valA=0, $valB=0)
   {
      if($valA == 0) {
         $valA = $this->numberA;
      }
      if($valB == 0) {
         $valB = $this->numberB;
      }
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

   public function demoThis() {
      return $this;
   }
}