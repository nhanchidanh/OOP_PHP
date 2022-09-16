<?php
// namespace Demo;
class Calculator
{
   var $numberA , $numberB ; //su dung var de khai bao cac thuoc tinh(default)
   // public $numberB=2;

   var $numberC;

   private $username='nhanchidanh', $password='123456', $math;
   
   //khai bao hang so
   const _MSG_CONTENT = 'Ket qua: {value}';

   public function __construct($config = [])
   {
      echo 'Ham khoi tao <br>';
      $this->numberC = 30;
      $this->math = new Math();

      echo '<pre>';
      print_r($config);
      echo '<pre>';
   }

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

   public function showMsg() {
      // return 'Demo Msg';
      return __CLASS__;
   }

   public function getUsername(){
      // return $this->username;
      $this->showinfo('username', $this->username);
   }

   public function getPassword() {
      // return $this->password;
      $this->showinfo('password', $this->password);
   }

   public function setUsername($value) {
      return $this->username = $value;
   }

   public function setPassword($value) {
      return $this->password = $value;
   }

   private function showinfo($type, $value){
      if($type == 'username') {
         echo 'Username: '.$value;
      }elseif ($type == 'password') {
         echo 'Password: '. $value;
      }else {
         echo 'Khong hop le';
      }
   }

   public function sqrt($number) {
      if(is_float($number)) {
         return $this->math->sqrt($number);
      }
      return 0;
   }

   public function __destruct()
   {
      echo "Ham huy";
   }
}