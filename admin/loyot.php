<html>
<head>
    <link rel="stylesheet" href="style.css">

    <title><?=$title?></title>
</head>
<body>
<div class="header">
    <div class="menu"><?php include 'header.php'?>
    </div>
    <a href="addpage.php">Добавить страницу</a>
</div>
<div class="content">
    <?php include 'elem/info.php'; ?>
    <?=$content?></div>
<div class="footer"><?php include 'footer.php'?></div>
</body>

</html>