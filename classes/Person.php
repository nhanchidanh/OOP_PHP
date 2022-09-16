<?php
class Person {
    public static $fullName = 'nhan chi Danh';
    public static $age = 30;
    public $location = 'Ha Noi';

    public static $person;

    public function __construct()
    {
        self::$person = $this;
    }

    public function getMessage() {
        return "Dang ky tai khoan thanh cong";
    }

    public static function getName() {
        // echo self::getMessage();
        echo "Dia diem ".self::$person->location; 
        return "Ten cua ban la: " . self::$fullName;
    }

    public function getAge() {
        return "Tuoi cua ban la: " . self::$age;
    }
}