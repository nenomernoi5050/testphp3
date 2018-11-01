<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>

            <?php
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $db = 'test';
            $link = mysqli_connect($host,$user,$pass,$db);
            if (!empty($_POST)){
                $name = $_POST['name'];
                $text = $_POST['text'];
                $db_add = "INSERT INTO guest SET user = '$name', text = '$text'";
                $quest = mysqli_query($link,$db_add);

            }unset($_POST);
            $db_read = "SELECT * FROM guest ORDER BY time DESC ";
            $result = mysqli_query($link,$db_read);
            for($mas = []; $stam = mysqli_fetch_assoc($result); $mas[] = $stam);
            $print = '';

            foreach ($mas as $elem){
                $print .= '<div class="note">';
                $print .= '<p><span class="date">'.$elem['time'].'</span>';
                $print .= '<span class="name">'.$elem['user'].'</span></p>';
                $print .= '<p>'.$elem['text'].'</p></div>';

            }
            ?>
            <div id="wrapper">
                <h1>Гостевая книга</h1>
                <?php echo $print?>



                <div class="note">





				<p>
					<span class="date">18.04.2014 23:59:59</span>
					<span class="name">Дмитрий</span>
				</p>
				<p>
					Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. 
					Nulla efficitur elementum lorem id venenatis. 
					Nullam id sagittis urna, eu ultrices risus. 
					Duis ante lorem, semper nec fringilla eu,
					commodo vel mauris. Nunc tristique odio lectus, eget condimentum nunc consectetur eu. Nullam non varius nisl, aliquet fringilla lectus. Aliquam erat volutpat. Ut vel mi et lectus hendrerit ornare vel ut neque. Quisque venenatis nisl eu mi
				</p>
			</div>	
			<div class="note">
				<p>
					<span class="date">16.04.2014 14:59:59</span>
					<span class="name">Николай</span>
				</p>
				<p>
					Ut varius commodo fringilla. Nullam id pulvinar odio. Pellentesque gravida aliquam ipsum, et malesuada neque molestie eget. Vestibulum sagittis finibus efficitur. Donec sit amet aliquet dolor, vitae ornare tortor. Etiam eget augue nec diam vehicula bibendum. Nulla quis erat lacus. Vestibulum quis mattis augue. Praesent dignissim, justo non aliquam feugiat, lorem metus egestas leo, quis eleifend odio quam in ex. Aenean diam est, scelerisque ac ultricies sit amet, vulputate in tortor. Etiam ac mi enim. Sed pellentesque elementum erat eu eleifend. Integer imperdiet sem eu magna feugiat, sed efficitur velit convallis. 
				</p>
			</div>
			<div class="note">
				<p>
					<span class="date">15.04.2014 12:59:59</span>
					<span class="name">Петр</span>
				</p>
				<p>
					Phasellus gravida fermentum pellentesque. Aenean non neque mollis nisl dapibus eleifend. Sed interdum dui nec dictum elementum. Proin eget semper dolor, ut commodo nibh. 
					Quisque vitae pharetra ligula. Sed dictum, sem sed pellentesque aliquam, tellus sapien dapibus magna, eu suscipit lacus augue sed velit. Ut vehicula sagittis nulla, et aliquet elit. Quisque tincidunt sem nibh, finibus dictum nisl vulputate quis. In vitae nisl et lacus pulvinar ornare id ac libero. Morbi pharetra fringilla erat ut lacinia. 
				</p>
			</div>	
			<div class="info alert alert-info">
				Запись успешно сохранена!
			</div>
			<div id="form">
				<form action="" method="POST">
					<p><input class="form-control"  name ="name" placeholder="Ваше имя"></p>
					<p><textarea class="form-control"  name ="text" placeholder="Ваш отзыв"></textarea></p>
					<p><input type="submit" class="btn btn-info btn-block" value="Сохранить"></p>
				</form>

			</div>
		</div>
	</body>
</html>

