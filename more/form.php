<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test';
$link = mysqli_connect($host,$user,$password,$db_name);
if (!empty($_POST)) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    $query = "UPDATE work SET name = '$name', age = '$age', salary= '$salary' WHERE id = '$edit'";
    mysqli_query($link, $query) or die(mysqli_error($link));



}
var_dump($query);
?>

<address>
    <h4>СТАВРОПОЛЬСКИЙ КРАЕВОЙ ИНДУСТРИАЛЬНЫЙ ПАРК &laquo;МАСТЕР&raquo;</h4>

    <p><strong>Адрес:</strong>&nbsp;355044, РФ,Ставропольский край, г.Ставрополь, пр.Кулакова, 18.</p>

    <p><strong>Телефоны:&nbsp;</strong></p>

    <p><strong>Приемная:</strong>&nbsp;(8652) 38-70-77</p>

    <p><strong>Бухгалтерия:</strong>&nbsp;(8652) 56-31-30</p>

    <p><strong>Отдел кадров:</strong>&nbsp;&nbsp;(8652) 56-02-67</p>

    <p><strong>Отдел по работе с клиентами:</strong><br>(8652) 39-73-09</p>

    <p><strong>Отдел главного энергетика:</strong><br>(8652) 56-28-37</p>

    <p><strong>E-mail:</strong>&nbsp;<a href="mailto:skip-master@mail.ru">skip-master@mail.ru</a></p>
</address>
