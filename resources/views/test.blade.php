<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<!-- CDN BOOTSTRAP 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- JS BOOTSTRAP 4 -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<style type="text/css">
			.sombra{
				margin: 0 auto;
				margin-top: 100px;
				text-align: center;
				box-shadow: 5px 5px 10px 5px #a8a8a8;
				padding-top: 20px;
				padding-bottom: 20px; 
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="sombra">
				<h2>Formulario de contacto</h2>
				<form method="post" action="{{route('contact')}}">
					{{csrf_field()}}
					<div class="form-group">
						<label for="name">Nombre:</label>
						<input type="text" name="name">
					</div>

					<div class="form-group">
						<label for="msg">Mensaje:</label>
						<input type="text" name="msg">
					</div>

					<div class="form-group">
						<button id="btn-contact" class="btn" type="submit">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>