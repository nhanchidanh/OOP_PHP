<?php
require_once 'traits/Database.php';
require_once 'classes/Posts.php';

$post = new Posts();

$post->getList();