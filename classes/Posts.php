<?php
class Posts {

    use Database;
    

    public function getList() {
        echo "Hello getList";
        echo '<br>';
        echo $this->fetch();
    }
}