<?php

require_once 'db.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

$test = "SELECT * FROM page WHERE url='$page'";
$connect = mysqli_query($link, $test);
$res = mysqli_fetch_assoc($connect);

if (!$res) {
    $test = 'SELECT * FROM page WHERE id = 5';
    $connect = mysqli_query($link, $test);
    $res = mysqli_fetch_assoc($connect);
}



$title = $res['title'];
$content = $res['text'];
include 'loyot.php';


