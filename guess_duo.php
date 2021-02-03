<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный сайт Настюши Франц!</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
	<script type="text/javascript">

		
	
	var answer = parseInt(Math.random() * 100);
	
	var playerNumber = 2;

	function readInt(){
		var number = document.getElementById("userAnswer").value;
		return parseInt(number);
	}

	function write(text){
		document.getElementById("info").innerHTML = text;

	}

	function hide(id){
		document.getElementById(id).style.display = "none";
	}

	function gess(){
			
			
			var userAnswer = readInt();
			if(userAnswer == answer){
				write("<b>Поздравляю, угадал игрок № </b>" + playerNumber );
				hide("userAnswer");
				hide("button");
				hide("button1");
			}  else if(userAnswer > answer){
			write("Теперь попытка игрока № " + playerNumber + "<br/>Вы ввели слишком <br>большое число.<br>Попробуйте еще раз. <br>Введите число от 1 до 100<br> ");
		} else if(userAnswer < answer){
			write("Теперь попытка игрока № " + playerNumber + "<br/>Вы ввели слишком<br> маленькое число.<br>Попробуйте еще раз.<br>Введите число от 1 до 100<br>");
		}
		if(playerNumber == 2)
			playerNumber = 1;
		else
			playerNumber = 2;
		
	}

	function closed(){
		write("<b>Очень, жаль. <br>Приходите ещё.</b>" + "<br/>Кстати <br>загаданное число было: " + answer);
			hide("userAnswer");
			hide("button");
			hide("button1");
	}
	
		
	</script>
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
					<h1>Игра Угадайка для двоих &#128150;</h1>
					<div class="box">

				<p id="info">Угадайте число от 0 до 100</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onclick="gess();" id="button">Играть</a>
				<div class="right">
					<a href="#" onclick="closed();" id="button1">Закончить</a>
			</div>
		</div>
					</div>
		        </div>
		   </div>
		</div>
	</main>
<footer><p>Copyright &copy;<?php echo date("Y");?> Anastasiia Frants</p></footer>
<script src="adaptive.js"></script>
</body>
</html>