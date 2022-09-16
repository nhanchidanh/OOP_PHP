<?php
require_once 'classes/database.php';
require_once 'classes/Bussiness.php';
require_once 'classes/Users.php';

//Khoi tao doi tuong tu lop con
// $bussiness = new Bussiness();
// $bussiness->table = 'users';

// echo $bussiness->getDetail();

// $bussiness->methodFromDb();

// echo $bussiness->fetch();

// $posts = new Bussiness('posts');
// echo $posts->getDetail();

//Khoi tao doi tuong tu lop cha
echo '<hr>';
// $db = new Database();
// $db->methodFromDb();

$users = new Users();

echo $users->getUserDetail();