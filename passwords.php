<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный сайт Настюши Франц!</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
	<script src="jquery-3.5.0.min.js"></script>

	<script>
	
        function readInt() {
            var number = document.getElementById("password").value;
            return parseInt(number);
        }

        function write(text) {
            document.getElementById("info").innerHTML = text;

        }


        function genPassword(digitQty) {
            var password = "";
            var digitQty = readInt();
            var symbols = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!№;%:?*()_+=";
            for (var i = 0; i < digitQty; i++) {
                password += symbols.charAt(Math.floor(Math.random() * symbols.length));
            }
            write("Ваш пароль<br> сгенерирован:<br> \n" + password);
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
					<h1>Генератор паролей</h1>
					<div class="box">
						

                        <p id="info"> Пожалуйста,<br> введите длину<br> необходимого пароля:</p>
                        <input type="text" id="password">

                        <br>
                        <a href="#" onclick="genPassword();" id="button">Сгенерировать</a>
                    
					</div>
		        </div>
		   </div>
		</div>
	</main>
<footer><p>Copyright &copy;<?php echo date("Y");?> Anastasiia Frants</p></footer>
<script src="adaptive.js"></script>
</body>
</html>