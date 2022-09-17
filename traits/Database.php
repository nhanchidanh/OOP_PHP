<?php
trait Database{

    public $table;

    public function fetch() {
        return "Lay du lieu tu table" . $this->table;
        echo '<br>';
    }

    public function methodFromDb() {
        echo "methodFromDb";
    }
}