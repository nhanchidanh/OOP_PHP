<?php
namespace App\Oop_php;
// use App\Oop_php\Home\Post as HomePost;
// use App\Oop_php\Admin\Post as AdminPost;

// use App\Oop_php\Home\Post;
// use App\Oop_php\Home\Product;

use App\Oop_php\Home\{Post, Product};
use DateTime;

class Main {
    function __construct()
    {
        $homePost = new Post();
        echo '<br>';
        // $adminPost = new AdminPost('Danh');

        $homeProduct = new Product();
        echo '<br>';

        $current = new DateTime();
        var_dump($current);
    }
}