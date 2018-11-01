<?php
require_once '../db.php';
$info = '';
function getFormEdit($link)
{
    $title = 'Admin Panel';
    $id = $_GET['edit'];

    $sql = "SELECT * FROM page WHERE id='$id'";
    $connect = mysqli_query($link,$sql);
    $res = mysqli_fetch_assoc($connect);
if ($res) {
    $title = $res['title'];
    $url = $res['url'];
    $text = $res['text'];

    $content = '<form method = "post" class="editPage" >
<label>Title</label>
    <input name = "title"  value = "' . $title . '" placeholder="Введите заголовок">
<label>URL</label>    
    <input name = "url" value = "' . $url . '" placeholder="Введите url страницы">
<label>Text</label>    
    <textarea name = "text" placeholder="Введите текст">' . $text . '</textarea >
    <input type = "submit" >
</form >';
}else{
    $content = 'Страница не существует';
}

    include 'loyot.php';
}

function SendFormEdit($link){
    if (isset($_POST['title']) and
        isset($_POST['url']) and
        isset($_POST['text']))
    {
        $id = $_GET['edit'];
        $title = $_POST['title'];
        $url = $_POST['url'];
        $text = $_POST['text'];

        $sql = "UPDATE  page SET title = '$title', url = '$url', text = '$text' WHERE id = '$id'";
        $connect = mysqli_query($link,$sql);

       header('location: /testphp/admin/?statusedit=true');
    }else{
        return '';
    }



}





SendFormEdit($link);
getFormEdit($link);
