<html>



<hr>
    <table border ="2px">
        <th>id</th>
        <th>Имя</th>
    <th>Возраст</th>
        <th>Зарплата</th>
       <th>Редактировать</th>
        <th>Удалить</th>

            <center>
                <?php
                $host = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'test';
                $link = mysqli_connect($host,$user,$password,$db_name);

                $db_value = "SELECT * FROM work";
                $db_result = mysqli_query($link,$db_value);
                for($mas = []; $row = mysqli_fetch_assoc($db_result); $mas[] = $row);
                $db_result = '';
                foreach ($mas as $elem){
                    $db_result .= '<tr>';
                    $db_result .= '<td>'.$elem['id'].'</td>';
                    $db_result .= '<td>'.$elem['name'].'</td>';
                    $db_result .= '<td>'.$elem['age'].'</td>';
                    $db_result .= '<td>'.$elem['salary'].'</td>';
                    $db_result .= '<td><a href = "?edit='.$elem['id'].'">Редактировать</a></td>';
                    $db_result .= '<td><a href = "?del='.$elem['id'].'">Удалить</a></td>';
                    $db_result .= '</tr>';
                }
                if (isset($_GET['edit'])) {
                    $edit = $_GET['edit'];
                    $query = "SELECT * FROM work WHERE id = $edit";
                    $result = mysqli_query($link, $query);
                    $row = mysqli_fetch_assoc($result);


                }  echo $db_result;
if (!empty($_POST)) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    $query = "UPDATE work SET name = '$name', age = '$age', salary= '$salary' WHERE id = '$edit'";
    mysqli_query($link, $query) or die(mysqli_error($link));
    // var_dump($query);
}





                ?>
                <form action="" method="post">

                    <input name = "name" value="<?php echo $row['name'] ?>"><br>
                    <input name = "age" value="<?php echo $row['age'] ?>"><br>
                    <input name = "salary" value="<?php echo $row['salary'] ?>"><br>
                    <input type="submit" value="Зарегистрировать">
                </form>
                </table>


            </center></html>