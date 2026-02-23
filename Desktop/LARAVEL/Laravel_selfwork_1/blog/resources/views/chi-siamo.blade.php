
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>{{ $titolo }}</title>
</head>
<body>
	<h1>{{ $titolo }}</h1>
	<ul>
		@foreach($team as $membro)
			<li>
				<strong>Nome:</strong> {{ $membro['nome'] }}<br>
				<strong>Ruolo:</strong> {{ $membro['ruolo'] }}<br>
				<strong>Email:</strong> {{ $membro['email'] }}
			</li>
		@endforeach
	</ul>
</body>
</html>
