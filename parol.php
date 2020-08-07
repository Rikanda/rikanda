<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var a = "abcdefghijklmnopqrstuvwxyz1234567890";
		var b = "";

		function simvol(){
		var numsimvol = parseInt(Math.random() * a.length);
		var regsimvol = parseInt(Math.random() * 2);
		if (regsimvol == 0){
			return a[numsimvol];
		} else {
			return a[numsimvol].toLocaleUpperCase();
		}
		}

		function readInt(){
			var number = document.getElementById("parolleigth").value;
			return parseInt(number);
			
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function parol(){
			var n = readInt();
			for (var i = 0; i<n; i++){
				s=simvol();
				b +=s;

			}
				write("Ваш пароль: " + b);

				hide("button");
				hide("parolleigth");

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

			<h1>Генератор паролей</h1>

			<div class="box">

				<p id="info">Укажите желаемую длину пароля: </p>
				<input type="text" id="parolleigth">
				<br>
				<a href="#" onClick="parol();" id="button">Получить пароль</a>				
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">Copyright &copy; <?php echo date("Y") ;?> Rikanda</div>


</body>
</html>