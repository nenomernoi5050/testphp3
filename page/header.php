<?php
function menu_link($link, $text){

    if ((!isset($_GET['page']) and $link == '/') or
        (isset($_GET['page']) and $_GET['page']) == $link){
        $class = ' class="active"';
    }
    else{
        $class = '';
    }
    if ($link == '/'){
        $url = '/testphp';

    }else{
        $url = '/testphp/?page=';
    }
    echo "<a href = \"$url$link\"$class>$text</a>";

}
//menu_link('/testphp/', 'Main');
//menu_link('/testphp/?page=kontakt', 'Contact');
//menu_link('/testphp/?page=page-1', 'Page1');
//menu_link('/testphp/?page=page-2', 'Page2');


$db_use = "SELECT * FROM page WHERE active = 1 ORDER BY sort ASC ";

$db_connect = mysqli_query($link,$db_use) or die(mysqli_error($db_connect));
for($var = []; $result = mysqli_fetch_assoc($db_connect); $var[] = $result);
foreach ($var as $elem){
    menu_link($elem['url'], $elem['visual_name']);
}

?>