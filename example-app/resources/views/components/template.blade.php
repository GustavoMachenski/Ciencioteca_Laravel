<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciencioteca</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
</head>
<body>
    <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="justify-content espace-between">
				<a href="./" class="navbar-brand"><img src="{{ asset('img/ciencioteca.png') }}" alt="Logo site ciencioteca" width="30%"></a>
			</div>
			<ul class="flex-row nav navbar-nav navbar-right">
				<li><a href="cadastre-se.php">Cadastre-se</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>
	</nav>
    {{$slot}}
</body>
</html>