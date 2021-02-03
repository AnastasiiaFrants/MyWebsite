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
		<div class="contentWrap">
			<div class="content">
				<div class="center">
					<h1>Игра в загадки</h1>
					<div class="box">
						<?php
						$userAnswer = $_GET["userAnswer1"];
						$score = 0;
						if($userAnswer == "водопровод"){
							$score++;
                        }
                        $userAnswer = $_GET["userAnswer2"];
						
						if($userAnswer == "граммофон"|| $userAnswer == "патефон"){
							$score++;
                        }
                        $userAnswer = $_GET["userAnswer3"];
						
						if($userAnswer == "ёж"|| $userAnswer == "ёжик" || $userAnswer == "ежик"  || $userAnswer == "еж"){
							$score++;
                        }
                        $userAnswer = $_GET["userAnswer4"];
						
						if($userAnswer == "книга"|| $userAnswer == "книжка"){
							$score++;
                        }
                        echo "Вы угадали ".$score." загадок";
						?>
						<form method="GET">
						<p>Загадка 1 <br>Речка спятила с ума-по <br>домам пошла сама</p>
						<input type="text" name="userAnswer1">
						<p>Загадка 2 <br>Музыкант, певец, рассказчик —<br> А всего труба да ящик.</p>
						<input type="text" name="userAnswer2">
						<p>Загадка 3 <br>Вот иголки и булавки <br>выползают <br>из-под лавки, <br>на меня они глядят,<br> молока они хотят.</p>
						<input type="text" name="userAnswer3">
						<p>Загадка 4 <br>Страну чудес откроем мы<br> и встретимся с героями<br> в строчках, на листочках, <br>где станции на точках.</p>
						<input type="text" name="userAnswer4">
						<br>
						<input type="submit" value="Ответить"  name="" > </form>
					</div>
		        </div>
		   </div>
		</div>
	</main>
<footer><p>Copyright &copy;<?php echo date("Y");?> Anastasiia Frants</p></footer>
<script src="adaptive.js"></script>
</body>
</html>