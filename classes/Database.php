<?php


class Database {
    // protected $table;
    public function __construct()
    {
        echo 'ket noi database <br>';
    }

    public function fetch() {
        return 'Lay data tu table ' . $this->table. '<br>';
    }

    public function methodFromDb() {
        echo 'methodFromDb <br>';
        // $this->methodFromBs();
    }
}