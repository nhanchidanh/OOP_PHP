<?php
require_once 'classes/DB.php';

$db = new DB();

// $db->table('users');
// echo '<br>';
// $db->where('id','=',1);

//Tuy nhien thi chung ta kh goi nhu tren
//$db->table('users')->where('id','=',1)->select()->get();

//Cach goi khac
// $db = $db->table('users');
// $db = $db->where('id','=',1);


DB::table('users')->get();