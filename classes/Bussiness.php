<?php
class Bussiness extends Database {
    // public function __construct($table)
    // {
    //     parent::__construct();//Goi de construct cua class cha
    //     $this->table = $table;
    // }

    protected $table = 'users';

    public function getDetail() {
        // $this->table = 'users';
        return $this->fetch();
    }

    public function methodFromBs() {
        echo 'methodFromBs <br>';
    }

    // public function fetch()
    // {
    //     return 'fetch tu class bussiness: ' . parent::fetch();
    // }
}