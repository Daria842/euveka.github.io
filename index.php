<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Вход в Эврика</title>
<meta name="description" content="Образовательная платформа, которая поможет реализовать свой потенциал!">
<link rel="stylesheet" type="text/css" href="css/styles.css"> 
</head>

<body>
<?php $url = $_SERVER["REQUEST_URI"];?>
<header>
	<img src="Сова.png" width="130" height="180" align="left" hspace="3">
    <br><h1>ЭВРИКА</h1>
	<h2>УЧЕНИЕ-СВЕТ!</h2>
	<button id="orderButton" class="mainbutton"><span>Тех.поддержка</span></button>
</header>
<main>
<section>
            <h2>Добро пожаловать в Эврика!</h2>
            <p>Образовательная платформа, которая поможет открыть новые горизонты и реализовать свой потенциал!</p>
			<div class="big">
				<div class="big-rectangle">
					<h2 class="title">Что мы предлагаем:</h2>
					<img src="Курсы.png"  class="big-rectangle-photo">
					<h2 class="two"><I>Блоги на любой вкус:</I></h2>
					<p>Хочешь узнать о новых технологиях, освоить искусство фотографии, разобраться в психологии или просто найти мотивацию? Наша платформа собрала лучшие блоги от экспертов и энтузиастов, которые поделятся своими знаниями и опытом.</p>
					<h2 class="two"><I>Курсы для саморазвития:</I></h2>
					<p>Учись чему угодно, где угодно и когда угодно! Выбирай из сотен онлайн-курсов по различным темам: от дизайна и программирования до фитнеса и кулинарии.</p>
					<img src="Блоги.jpeg"  class="big-photo">
					<h2 class="two"><I>Полезные подкасты:</I></h2> 
					<p>Слушай интересные беседы и истории, которые расширят твой кругозор и вдохновят тебя на новые достижения.</p>
					<h2 class="two"><I>Живое сообщество:</I></h2>
					<p>Общайся с единомышленниками, делитесь знаниями, поддерживайте друг друга и вместе стройте свой путь к успеху!</p>
				</div>
				<div class="box">
					<img src="Сова.png" alt="Логотип" class="box-logo">
					<h2 class="box-title">Вход в ЭВРИКА</h2>
					<p>Для продолжения Вам необходимо войти в ЭВРИКА.</p>
					<form name="form1" method="post" action="login.php">
						<p>Email:</p>
						<input type="text" name="email">
						<p>Пароль:</p>
						<input type="password" name="password">
					</form>
					<a href="reg.html" class="box-lk">Регистрация:</a>
					<a href="courses.html" class="box-link"><button class="box-button">Войти</button></a>
				</div>
			</div>
			<p><h2>Эврика – это не просто приложение, это целая экосистема для твоего саморазвития!</h2></p> 
            <p><h2>Зарегистрируйся и присоединяйся к нашему сообществу!</h2></p>
        </section>
		<div id="modal" class="modal2">
			<div class="modal2_body">
				<form name="form1" method="post" action="a.php">
				<p>Имя: <input type="text" id="name" name="name" required></p>
				<p>Ваш Email: <input type="text" id="email" name="email" required></p>
				<p>Сообщение <textarea id="message" name="message" rows="5" required></textarea></p>
				<p><input type="submit" name="send" value="Отправить"></p>
				</form>
				<?php
				/* Подключаемся к базе данных */
				$link = mysqli_connect("localhost", "root", "");
				mysqli_select_db($link, "praktika");
				
				/* Выбираем данные */
				$sql="SELECT name, email, message FROM baa";
				$result=mysqli_query($link, $sql);
				
				while ($line=mysqli_fetch_row($result)) {
				echo "<b>Имя:</b>".$line[0]."<br>";
				echo "<b>Email:</b>".$line[1]."<br>";
				echo "<b>Сообщение:</b>".$line[2]."<br><br>";
				}
				?>
			</div>
		</div>
    </main>
    <footer>
        <p>&copy; 2024 Эврика. Все права защищены.</p>
    </footer>
	<script>
    document.getElementById("orderButton").addEventListener("click", function() {
      document.getElementById("modal").style.display = "block";
    });
  </script>
<script src="start.js"></script>
</body>
</html>
