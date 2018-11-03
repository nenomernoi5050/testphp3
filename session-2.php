<?php
session_start();
if(isset($_SESSION)) {
    $curent = time() - $_SESSION['date'];
    echo 'С момента создания сессии прошло: '.$curent.' секунд';
}else {
    echo 'сесссия не создана';
}