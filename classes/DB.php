<?php
class DB{
   private static $db;
   public function __construct()
   {
      self::$db = $this;
   }

   public function table($table) {
      echo $table;
      echo '<br>';
      return self::$db;
   }

   public function where($field, $compare, $value) {
      echo "where";
      echo '<br>';
      return $this;
   }

   public function select($field='*'){
      echo $field;
      echo '<br>';
      return $this;
   }

   public function get(){
      echo "Run";
   }
}