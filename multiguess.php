<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 6;
		var playerNumber =1;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function playerNumberCount(n){
				if(n==1) {
					n=2;
				} else {
					n=1;
				}
				return n;
				}

		function guess(){
			tryCount++;

			var userAnswer = readInt();
			if(userAnswer == answer){
				write("<b>Поздравляю, вы угадали!</b>");
				hide("button");
				hide("userAnswer");
			} else if(tryCount >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
				playerNumber = playerNumberCount(playerNumber);
				write("Вы ввели слишком большое число<br>Ход переходит к "+playerNumber+" игроку<br>Всего осталось "+(maxTryCount-tryCount)+" ходов<br> Введите число от 1 до 100:");
			} else if(userAnswer < answer){
				playerNumber = playerNumberCount(playerNumber);
				write("Вы ввели слишком маленькое число<br>Ход переходит к "+playerNumber+" игроку<br>Всего осталось "+(maxTryCount-tryCount)+" ходов<br> Введите число от 1 до 100:");				
			}
        
		}

	</script>
</head>
<body>

<div class="content">
	<div class="header">
		<?php  
include "menu.php";
?>	
	</div>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка для двоих игроков</h1>

			<div class="box">

				<p id="info">Угадайте число от 0 до 100. На двоих у вас 6 ходов.</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Проверить число</a>				
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">Copyright &copy; <?php echo date("Y") ;?> Rikanda</div>


</body>
</html>