<?php
//version control
require_once '../db.php';

function showTablePage($link, $info)
{
    $test = "SELECT * FROM page";
    $connect = mysqli_query($link, $test);
    for ($var = []; $result = mysqli_fetch_assoc($connect); $var[] = $result) ;
    $content = '<table>
<tr>
<th>url</th>
<th>title</th>
<th>edit</th>
<th>delete</th>
</tr>';
    foreach ($var as $elem) {
        $content .= "<tr>
<td>{$elem['url']}</td>
<td>{$elem['title']}</td>
<td><a href=\"edit.php?edit={$elem['id']}\">Edit</a></td>
<td><a href=\"?delete={$elem['id']}\">Delete</a></td>
</tr>";
    }


    $title = 'admin Panel';
    $content .= '</table>';
    include 'loyot.php';

}

function deletePage($link){
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "DELETE FROM page WHERE id=$id";
        $result = mysqli_query($link,$sql);
        return ['text' => 'Страница успешно удалена',
            'status' => 'seccuse'
        ];
    }else{
        return false;
    }
}

$info = deletePage($link);


if (isset($_GET['status'])){
    $info = ['text' => 'Страница успешно добавлена',
                'status' => 'seccuse'
            ];
}
if (isset($_GET['statusedit'])){
    $info = ['text' => 'Страница успешно обновлена',
        'status' => 'seccuse'
    ];
}
showTablePage($link, $info);