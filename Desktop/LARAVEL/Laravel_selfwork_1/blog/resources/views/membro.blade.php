<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>{{ $membro['nome'] ?? 'Membro' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <a href="/chi-siamo" class="btn btn-secondary mb-3">&larr; Torna al team</a>
        @if($membro)
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">{{ $membro['nome'] }}</h1>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $membro['ruolo'] }}</h6>
                    <p class="card-text">{{ $membro['email'] }}</p>
                    <p class="card-text"><strong>Biografia:</strong> {{ $membro['bio'] }}</p>
                </div>
            </div>
        @else
            <div class="alert alert-danger">Membro non trovato</div>
        @endif
    </div>
    <nav style="position:fixed;bottom:20px;left:0;width:100%;text-align:center;">
        <a href="/" style="margin-right: 10px;">Home</a>
        <a href="/articoli" style="margin-right: 10px;">Articoli</a>
        <a href="/chi-siamo" style="margin-right: 10px;">Chi Siamo</a>
        <a href="/contatti">Contatti</a>
    </nav>
</body>
</html>
