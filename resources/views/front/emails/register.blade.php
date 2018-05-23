<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FELICIDADES</title>
</head>
<body style="font-family: arial;">
	<table width="90%" style="max-width: 1000px; background: #fff; color: #5f5f5f;" align="center">
		<tr style="background: #0290c5; color: #fff;" align="center">
			<td>
				<h1><img src="https://ontmx.com/pepsico/kacang/public/front/assets/img/home/Logo_Central.png" alt="" width="100px"></h1>
			</td>
		</tr>
		<tr align="center">
			<td>
				<br><br>
				<h1>¡Felicidades!</h1>
				<p>{{ $mensaje->nombre; }}</p>
				<br><br>
			</td>
		</tr>
		<tr align="center">
			<td>
				<h3>Muy pronto nos pondremos en contacto contigo para la entrega de tu premio:</h3>
			</td>
		</tr>
	
		<tr align="center">
			<td>
				<h3>"aaa"</h3>
				<h3>Código de verificación: <b>{{ $uniqueIDSell }}</b></h3>
			</td>
		</tr>

		<tr align="center">
			<td>
				<h3>Recuerda que para poder hacer el envío de tu premio <br>es necesario envies tu dirección completa a:</h3>
				<h3><a href="mailto:correo@pepsico.com">correo@pepsico.com</a></h3>
			</td>
		</tr>

		<tr align="center">
			<td>
				<h2>¡Espéralo!</h2>
			</td>
		</tr>

		<tr align="center">
			<td>
				<h4>Mas información en <a href="{{ url("/terminos-condiciones") }}">Términos y Condiciones</a></h4>
			</td>
		</tr>
	</table>
</body>
</html>