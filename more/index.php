<html xmlns="http://www.w3.org/1999/html">
<head>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fancybox/dist/jquery.fancybox.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="fancybox/dist/jquery.fancybox.min.css" media="screen"/>

    <link
    = 'style/styles.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/styles.css" type="text/css"/>
</head>
<!------------------------------------Head-------------------------------------->

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="fancybox/dist/jquery.fancybox.min.js"></script>


<div class="header">
    <div class="h_block1">
        <a href="http://localhost/testphp/index.php">
            <img src="image/logo.jpg" width="45px" height="35px">
        </a>
    </div>
    <div class="h_block2">
        <button>ComeBack</button>
        <div>
            <nav id="menu">
                <h2>Menu</h2>
                <li><a href="index.php">Большая ссылка</a></li>
                <li><a href="index.php">Большая ссылка</a></li>
                <li><a href="index.php">Большая ссылка</a></li>
            </nav>

            <main id="panel">
                <header>
                    <button class="toggle-button">☰</button>
                    <h2>Panel</h2>
                </header>
            </main>

            <script src="dist/slideout.min.js"></script>
            <script>
                var slideout = new Slideout({
                    'panel': document.getElementById('panel'),
                    'menu': document.getElementById('menu'),
                    'padding': 256,
                    'tolerance': 70
                });

                // Toggle button
                document.querySelector('.toggle-button').addEventListener('click', function () {
                    slideout.toggle();
                });
            </script>


        </div>
    </div>
    <div class="h_block3">

        <ul class="h_menu">
            <li><a href="index.php">ссылка</a>
                <ul class="sub_h">
                    <li><a href="index.php">Большая ссылка</a></li>
                    <li><a href="index.php">Большая ссылка</a></li>
                    <li><a href="index.php">Большая ссылка</a></li>
                    <li><a href="index.php">Большая ссылка</a></li>
                    </li>
                </ul>
            <li><a href="index.php">ссылка</a>
                <ul class="sub_h">
                    <li><a href="index.php">Большая ссылка</a></li>
                    <li><a href="index.php">Большая ссылка</a></li>
                    <li><a href="index.php">Большая ссылка</a></li>
                    </li>
                </ul>

            <li><a href="index.php">ссылка</a>
                <ul class="sub_h">
                    <li><a href="index.php">Большая ссылка</a></li>
                    <li><a href="index.php">Большая ссылка</a></li>
                    <li><a href="index.php">Большая ссылка</a></li>
                    <li><a href="index.php">Большая ссылка</a></li>
                    </li>
                </ul>
            <li><a href="index.php">ссылка</a></li>
            <li><a href="index.php">ссылка</a></li>
            <li><a href="index.php">Большая ссылка</a></li>


        </ul>


        <span class="phone"> 8 (928) 356 - 45 - 43</span><br>
        <span class="phone2"> 8 (928) 356 - 45 - 43</span>
    </div>
</div>
<!------------------------------------End Head-------------------------------------->
<!------------------------------------Тело-------------------------------------->
<div class="main">
    <div class="m_block1">
        <!--  <ul class="block_l_menu">
              <li><a href="index.php">Большая ссылка</a>
              <ul class="sub_1">
                  <li><a href="index.php">Второй уровень</a></li>
                  <li><a href="index.php">Второй уровень</a></li>
                  </li>
              </ul>
                            <li><a href="index.php">Большая ссылка</a></li>
                            <li><a href="index.php">Большая ссылка</a></li>
                            <li><a href="index.php">Большая ссылка</a></li>
                            <li><a href="index.php">Большая ссылка</a></li>
                            <li><a href="index.php">Большая ссылка</a></li>
          </ul>-->

    </div>
    <div class="m_block2">
        <img class="baner" src="image/baner.jpg">
        <a data-fancybox="gallery" rel="group" data-caption="Caption #1" title="Одиночная картинка"
           href="image/baner.jpg"><img src="image/baner.jpg"></a>
        <img class="baner" src="image/baner.jpg">
        <img class="baner" src="image/baner.jpg">
        <img class="baner" src="image/baner.jpg">
        <img class="baner" src="image/baner.jpg">
    </div>
    <div class="m_block3">
        <center>

            <form action="" method="post">
                <?php echo input('name'); ?>

                <input name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age'] ?>"><br>
                <input name="salary" value="<?php if (isset($_POST['salary'])) echo $_POST['salary'] ?>"><br>
                <input type="submit" value="Зарегистрировать">
            </form>


            <table border="2px" style="margin-top: 20px">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>salary</th>
                    <th>delete</th>

                </tr>
                <style>
                    a {
                        text-decoration: none;
                        font-size: 16px;
                    }

                    .active {
                        font-size: 20px;
                        color: red;
                    }
                </style>
                <?php
                $host = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'test';
                $link = mysqli_connect($host, $user, $password, $db_name);
                function input($name)
                {
                    if (isset($_POST['name'])) {
                        $value = $_POST['name'];
                    } else {
                        $value = '';
                    }
                    return '<input name ="' . $name . '" value="' . $value . '">';


                }

                if (!empty($_POST)) {
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $salary = $_POST['salary'];
                    $queryset = "INSERT INTO work SET name = '$name', age = '$age', salary = '$salary'";
                    mysqli_query($link, $queryset);
                }
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 0;
                }
                $onpage = 5;
                $from = ($page - 1) * $onpage;
                $query = "SELECT COUNT(*) as count FROM work";
                $result = mysqli_query($link, $query);
                $count = mysqli_fetch_assoc($result)['count'];
                $pcount = ceil($count / $onpage);
                for ($i = 1; $i <= $pcount; $i++) {
                    if ($page == $i) {
                        $class = ' class = "active"';
                    } else {
                        $class = '';
                    }

                    echo "<a href=\"?page=$i\"$class>$i </a> ";

                }

                if (isset($_GET['del'])) {
                    $del = $_GET['del'];
                    $query = "DELETE FROM work WHERE id =$del";
                    mysqli_query($link, $query) or die(mysqli_error($link));
                }
                $query = "SELECT * FROM work LIMIT $page,$onpage ";
                $result = mysqli_query($link, $query);
                for ($mas = []; $row = mysqli_fetch_assoc($result); $mas[] = $row) ;

                $result = '';
                foreach ($mas as $elem) {
                    $result .= '<tr>';
                    $result .= '<td>' . $elem['id'] . '</td>';
                    $result .= '<td>' . $elem['name'] . '</td>';
                    $result .= '<td>' . $elem['age'] . '</td>';
                    $result .= '<td>' . $elem['salary'] . '</td>';
                    $result .= '<td><a href = "?del=' . $elem['id'] . '">Удалить</a></td>';

                    $result .= '</tr>';
                }
                echo $result;

                ?>

            </table>
        </center>


        <hr>
        <table border="2px">
            <th>id</th>
            <th>Имя</th>
            <th>Возраст</th>
            <th>Зарплата</th>
            <th>Редактировать</th>
            <th>Удалить</th>

            <center>
                <?php

                $db_value = "SELECT * FROM work";
                $db_result = mysqli_query($link, $db_value);
                for ($mas = []; $row = mysqli_fetch_assoc($db_result); $mas[] = $row) ;
                $db_result = '';
                foreach ($mas as $elem) {
                    $db_result .= '<tr>';
                    $db_result .= '<td>' . $elem['id'] . '</td>';
                    $db_result .= '<td>' . $elem['name'] . '</td>';
                    $db_result .= '<td>' . $elem['age'] . '</td>';
                    $db_result .= '<td>' . $elem['salary'] . '</td>';
                    $db_result .= '<td><a href = "?edit=' . $elem['id'] . '">Редактировать</a></td>';
                    $db_result .= '<td><a href = "?del=' . $elem['id'] . '">Удалить</a></td>';
                    $db_result .= '</tr>';
                }
                if (isset($_GET['edit'])) {
                    $edit = $_GET['edit'];
                    $query = "SELECT * FROM work WHERE id = $edit";
                    $result = mysqli_query($link, $query);
                    $row = mysqli_fetch_assoc($result);
                    echo '<form action="" method="post" onSubmit="window.location.reload()">';

                    echo '<input type="name" name="name" value="' . $row['name'] . '"><br>';
                    echo '<input type="age" name="age" value="' . $row['age'] . '"><br>';
                    echo '<input type="salary" name="salary" value="' . $row['salary'] . '"><br>';
                    echo '<input type="submit" name="click">';
                    echo '</form>';


                    if (!empty($_POST['click'])) {
                        $name = $_POST['name'];
                        $age = $_POST['age'];
                        $salary = $_POST['salary'];

                        $query = "UPDATE work SET name = '$name', age = '$age', salary= '$salary' WHERE id = '$edit'";
                        mysqli_query($link, $query) or die(mysqli_error($link));


                    }
                }

                echo $db_result;
                var_dump($query);
                ?>
        </table>


        </center>


    </div>
</div>
<!------------------------------------ Конец Тело-------------------------------------->
<div class="footer">
    <div class="f_block1">1</div>
    <div class="f_block2">2</div>
    <div class="f_block3">3</div>
</div>

</html>