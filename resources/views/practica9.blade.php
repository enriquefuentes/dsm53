<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Practica9 - JavaScript</title>
	<!-- Font -->

	<!-- Styles-->

	<style>
		html, body{
			background-color: #fff;
			/* color: #636b6f; */
			font-family: 'Nunito', sans-serif;
			font-weight: 200;
			height: 100vh;
			margin: 0;
		}
		.content{ text-align: center; }
	</style>
	<script type="text/javascript"></script>
</head>
<body>
	<div class="content">
		
		<br>
		<br>
		<h1>PATTERN</h1>
		<br>
		<br>
		<br>
		<br>
		<br>
		Evaluacion 1:<br>
			<input type="text" required pattern="[0-9\/]+"/>
		<br>
		<br>
		Evaluacion 2:<br>
			<input id="evaluacion" type="text" onblur="fieldSize()">
			<br>
			<p id="error"></p>
		<script>
			const $input = document.querySelector("#evaluacion");
			const patron = /[a-zA-Z]+/;

			$input.addEventListener("keydow",event =>{
				if(patron.test(event.key)){
					document.getElementById('evaluacion').style.border = "3px solid #00cc00";
				} 
				else{
					if (event.keycode==8) {
						//console.log("backspace");
					}
					else{
						event.preventDefault();
						//var tcla = event.keyCode;
						//console.log(tcla);
					}
				}
			});

			function fieldSize() {
				var tam = document.getElementById("evaluacion").value;
				if(tam.length>=2 && tam.length<=4){
					document.getElementById("error").innerHTML="";
				}
				else{
					document.getElementById("error").innerHTML="Error: Tamaño del texto";
					document.getElementById('evaluacion').style.border="3px solid #FF0000";
				}
			}
		</script>	
		<br>
		<br>
		Indica Valores textuales/numericos: <br>
		<input type="text" size="40" onkeypress="ifTxt(event)">

		<p id="salida"></p>

		<script>
			function ifTxt(event){
				var vn =event.keyCode;
				var vt= String.fromCharCode(vn);
				document.getElementById("salida").innerHTML="Numerico:" +vn+ "<br>Textual"+vt;
			}
		</script>
	</div>

</body>
</html>