<html xmlns="http://www.w3.org/1999/html">
<head>
    <link = 'style/styles.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/styles.css" type="text/css"/>
</head>
<!------------------------------------Head-------------------------------------->
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
                document.querySelector('.toggle-button').addEventListener('click', function() {
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
        <img  class="baner" src="image/baner.jpg">
        <img  class="baner" src="image/baner.jpg">
        <img  class="baner" src="image/baner.jpg">
        <img  class="baner" src="image/baner.jpg">
        <img  class="baner" src="image/baner.jpg">
    </div>
    <div class="m_block3">
        <center>

            <form action="" method="post">
                <?php echo input('name'); ?>

                <input name = "age" value="<?php if (isset($_POST['age']))echo $_POST['age'] ?>"><br>
                <input name = "salary" value="<?php if (isset($_POST['salary']))echo $_POST['salary'] ?>"><br>
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

                <?php
                $host = 'localhost';
                $user = 'root';
                $password = '';
                $db_name = 'test';
                $link = mysqli_connect($host,$user,$password,$db_name);
                function input($name){
                    if (isset($_POST['name'])){
                        $value = $_POST['name'];
                    }
                    else{
                        $value = '';
                    }
                    return '<input name ="'.$name.'" value="'.$value.'">';


                }
                if (!empty($_POST)){
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $salary = $_POST['salary'];
                    $queryset = "INSERT INTO work SET name = '$name', age = '$age', salary = '$salary'";
                    mysqli_query($link,$queryset);
                }

                if (isset($_GET['del'])){
                    $del = $_GET['del'];
                    $query = "DELETE FROM work WHERE id =$del";
                    mysqli_query($link,$query) or die(mysqli_error($link));
                }
                $query = "SELECT * FROM work ";
                $result = mysqli_query($link,$query);
                for ($mas = []; $row = mysqli_fetch_assoc($result); $mas[] = $row);

                $result = '';
                foreach ($mas as $elem) {
                    $result .= '<tr>';
                    $result .= '<td>'.$elem['id'].'</td>';
                    $result .= '<td>'.$elem['name'].'</td>';
                    $result .= '<td>'.$elem['age'].'</td>';
                    $result .= '<td>'.$elem['salary'].'</td>';
                    $result .= '<td><a href = "?del='.$elem['id'].'">Удалить</a></td>';

                    $result .= '</tr>';
                }
                echo $result;

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