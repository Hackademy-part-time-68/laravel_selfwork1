
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>Articoli</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<h1>Articoli</h1>
	<nav style="position:fixed;bottom:20px;left:0;width:100%;text-align:center;">
		<a href="/" style="margin-right: 10px;">Home</a>
		<a href="/articoli" style="margin-right: 10px;">Articoli</a>
		<a href="/chi-siamo" style="margin-right: 10px;">Chi Siamo</a>
		<a href="/contatti">Contatti</a>
	</nav>
	<div class="container mt-4">
		<div class="row">
			@if(empty($articoli))
				{{-- stampare nessun articolo disponibile --}}
				<div class="col-12">
					<div class="alert alert-warning text-center">Nessun articolo disponibile</div>
				</div>
			@else
				{{-- effettuare il ciclo e stampare tutti gli articoli --}}
				@foreach($articoli as $index => $article)
					<div class="col-md-4 mb-4">
						<div class="card h-100">
							<div class="card-body">
								<h5 class="card-title">{{ $article['title'] }}</h5>
								<h6 class="card-subtitle mb-2 text-muted">{{ $article['category'] }}</h6>
								<p class="card-text">{{ $article['description'] }}</p>
								<a href="{{ route('articolo', $index) }}" class="btn btn-primary">Leggi articolo completo</a>
							</div>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>
</body>
</html>
