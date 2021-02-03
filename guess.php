<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный сайт Настюши Франц!</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
	<script src="jquery-3.5.0.min.js"></script>
	<script type="text/javascript">
		var answer = parseInt(Math.random()* 100);
		var tryCount = 0;
		var maxTryCount = 10;
		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
		}
		function write(text){
			document. getElementById("info").innerHTML = text;
		}
		function hide(id){
			document.getElementById(id).style.display="none";
			
		}
		function guess(){
			tryCount++;
			var userAnswer = readInt();
		 if(userAnswer == answer){
				write("Поздравляю!Вы угадали!");
				hide("userAnswer");
			    hide("button");
			} 
			else if (tryCount >= maxTryCount){
				write("Вы проиграли!<br>Правильный ответ: " + answer);
				hide("userAnswer");
			    hide("button");
			}
	     else if(userAnswer < answer){
		    write("Вы ввели слишком<br> маленькое число!<br>Попробуйте ещё раз.<br> Введите число от 1 до 100.")
			}
		 else if(userAnswer > answer){
			write("Вы ввели слишком<br> большое число!<br>Попробуйте ещё раз. <br>Введите число от 1 до 100.")
			}
		}
		
	</script>
</head>
<body>
	
<?php
	include "menu.php"
	?>
	

	<main>
		<div class="contentWrap">
			<div class="content">
				<div class="center">
					<h1>Игра Угадайка</h1>

					
					<div class="box">

						<p id="info">Угадайте число от 1 до 100</p>
						<input type="text" id="userAnswer">
						<br>
						<a href="#" onClick="guess()" id="button";>Начать</a>
					
					</div>
		        </div>
		   </div>
		</div>
	</main>
<footer><p>Copyright &copy;<?php echo date("Y");?> Anastasiia Frants</p></footer>
<script src="adaptive.js"></script>
</body>
</html>