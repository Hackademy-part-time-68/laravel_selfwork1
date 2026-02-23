
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>{{ $titolo }}</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container mt-4">
		<h1>{{ $titolo }}</h1>
		<div class="row">
			@foreach($team as $index => $membro)
				<div class="col-md-4 mb-4">
					<a href="{{ route('membro', $index) }}" style="text-decoration: none; color: inherit;">
						<div class="card h-100">
							<div class="card-body">
								<h5 class="card-title">{{ $membro['nome'] }}</h5>
								<h6 class="card-subtitle mb-2 text-muted">{{ $membro['ruolo'] }}</h6>
								<p class="card-text">{{ $membro['email'] }}</p>
							</div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
	<nav style="position:fixed;bottom:20px;left:0;width:100%;text-align:center;">
		<a href="/" style="margin-right: 10px;">Home</a>
		<a href="/articoli" style="margin-right: 10px;">Articoli</a>
		<a href="/chi-siamo" style="margin-right: 10px;">Chi Siamo</a>
		<a href="/contatti">Contatti</a>
	</nav>
</body>
</html>
