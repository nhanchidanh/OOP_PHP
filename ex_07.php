<?php
require_once 'classes/Person.php';
$person = new Person();
echo Person::$fullName . '<br>';
echo Person::$age . '<br>';

echo $person->location. '<br>';

echo Person::getName();
echo '<hr>';



//Neu phuogn thuc kh phai tinh thi co the goi giong nhu phuong thuc tinh va kh co TH nguoc lai
//Khi truy cap giua phuiopng thuctinh va thuoc tinh tinh trong noi bo class
//Neu muon truy cap toi thuoc tinh tinh trong class thi cu phap self::[ten thuoc tinh] ap dung ca voi phuong thuc tinh