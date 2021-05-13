<?php

require 'functions.php';

if (! isset($_GET['id'])) {
    header("HTTP/1.0 404 Not Found");
    require '404.php';
    exit();
}

$users = getUsers();

if (! isset($users[$_GET['id']])) {
    header("HTTP/1.0 404 Not Found");
    require '404.php';
    exit();
}

$user = $users[$_GET['id']];



require 'user_detail.phtml';




