<?php
if (isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 'index';
}
$path = "page/$page.php";

if (file_exists($path)){
    $content = file_get_contents($path);

    $reg = '#\{\{title:(.*?)\}\}#';
    if (preg_match($reg,$content, $match)){
        $title = $match[1];
        $content = preg_replace($reg,' ', $content);
    }
    else{
        $title = '';
    }
    $reg = '#\{\{desc:(.*?)\}\}#';
    if (preg_match($reg,$content, $match)){
        $desc = $match[1];
        $content = preg_replace($reg,' ', $content);
    }
    else{
        $desc = '';
    }

}else{
    $content = file_get_contents("page/404.php");
    $title = '404';

}

include 'loyot.php';