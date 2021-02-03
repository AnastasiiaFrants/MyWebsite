<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный сайт Настюши Франц!</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
	
	<script src="jquery-3.5.0.min.js"></script>
</head>
<body>
	<?php
	include "menu.php"
	?>
	

	<main>
		<h1 id="title">Личный сайт студентки GeekBrains</h1>
		<div id="avatar">
			<img src="ava.jpg" alt="image"></div>
		<div class="box_text">
		<p>	<b>Добрый день</b>. Меня зовут <i>Анастасия Франц<i>.
		 <br>Я совсем недавно начала программировать,
		 <br>однако уже написала свой сайт.
		</p>
		<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">Geekbrains</a></p>
		<p>На этом сайте вы сможете сыграть в несколько игр, которые я написала: 
		<a href="#">Главная</a>,
		<a href="puzzle.php">Загадки</a>,
		<a href="guess.php">Угадайка</a>,
		<a href="guess_duo.php">Угадайка для двоих &#9829; </a>,
		<a href="passwords.php">Генератор паролей </a>.
		</p>
		<p>Кстати!Подписывайтесь на мой <a href="https://github.com/AnastasiiaFrants">Гитхаб</a>,пишите комменты! </p>
	</main>
<footer><p>Copyright &copy;<?php echo date("Y");?> Anastasiia Frants</p></footer>
<script src="adaptive.js"></script>
</body>
</html>