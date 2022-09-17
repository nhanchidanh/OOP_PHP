<?php
abstract class Model{

    protected $msg;
    const _DB_INFO = ["localhost", "root", "", "unicode"];

    //Phuong thuc binh thuong
    public function getMessage(){
        return "this is my message";
    }

    //Phuong thuc truu tuong (hien thi)
    abstract protected function show();
    //(them)
    abstract public function add();
    //(cap nhat)
    abstract public function update();
    //(xoa)
    abstract public function delete();
}