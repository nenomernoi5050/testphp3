<?php
require_once '../db.php';
function getForm($link, $info)
{
    $title = 'Admin Panel';

    if (isset($_POST['title']) and
        isset($_POST['url']) and
        isset($_POST['text'])) {
        $title = $_POST['title'];
        $url = $_POST['url'];
        $text = $_POST['text'];
    }else{
            $title = '';
            $url = '';
            $text = '';
    }
 $content =   '<form method = "post" class="addPage" >
    <input name = "title"  value = "'.$title.'" placeholder="Введите заголовок">
    <input name = "url" value = "'.$url.'" placeholder="Введите url страницы">
    <textarea name = "text" placeholder="Введите текст">'.$text.'</textarea >
    <input type = "submit" >
</form >';
    include 'loyot.php';
}
function SendForm($link){
    if (isset($_POST['title']) and
       isset($_POST['url']) and
       isset($_POST['text']))
    {
        $title = $_POST['title'];
        $url = $_POST['url'];
        $text = $_POST['text'];

        $sql = "SELECT COUNT(*) as count FROM page WHERE url='$url'";
        $connect = mysqli_query($link,$sql);
        $res = mysqli_fetch_assoc($connect)['count'];
        if ($res){
            return ['text' => 'Страница уже существует',
                    'status' => 'error'
                ];
        }
        else
        {
            $sql = "INSERT INTO page SET title = '$title', url = '$url', text = '$text'";
            $connect = mysqli_query($link,$sql);
            header('location: /testphp/admin/?status=true');
        }
    }else{
        return '';
    }

}
$info = SendForm($link);


getForm($link,$info);
