<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>{{ $article['title'] ?? 'Articolo' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav style="position:fixed;bottom:20px;left:0;width:100%;text-align:center;">
        <a href="/" style="margin-right: 10px;">Home</a>
        <a href="/articoli" style="margin-right: 10px;">Articoli</a>
        <a href="/chi-siamo" style="margin-right: 10px;">Chi Siamo</a>
        <a href="/contatti">Contatti</a>
    </nav>
    <div class="container mt-4">
        <a href="/articoli" class="btn btn-secondary mb-3">&larr; Torna agli articoli</a>
        @if($article)
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">{{ $article['title'] }}</h1>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $article['category'] }}</h6>
                    <p class="card-text">{{ $article['description'] }}</p>
                </div>
            </div>
        @else
            <div class="alert alert-danger">Articolo non trovato</div>
        @endif
    </div>
</body>
</html>
