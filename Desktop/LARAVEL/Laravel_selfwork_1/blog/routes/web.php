<?php
use Illuminate\Support\Facades\Route;

Route::get('/membro/{id}', function ($id) {
    $team = [
        [
            'nome' => 'Alessandro Rossi',
            'ruolo' => 'Project Manager',
            'email' => 'alessandro.rossi@example.com',
            'bio' => 'Alessandro è il project manager con 10 anni di esperienza nel coordinamento di team di sviluppo.'
        ],
        [
            'nome' => 'Giulia Bianchi',
            'ruolo' => 'Sviluppatrice',
            'email' => 'giulia.bianchi@example.com',
            'bio' => 'Giulia è una sviluppatrice appassionata di Laravel e tecnologie web.'
        ],
        [
            'nome' => 'Luca Verdi',
            'ruolo' => 'Designer',
            'email' => 'luca.verdi@example.com',
            'bio' => 'Luca è il designer creativo del team, specializzato in UI/UX.'
        ]
    ];
    $membro = $team[$id] ?? null;
    if (!$membro) {
        abort(404);
    }
    return view('membro', ['membro' => $membro]);
})->name('membro');


Route::get('/articolo/{id}', function ($id) {
    $articoli = [
        [
            'title' => 'Laravel: Introduzione',
            'category' => 'Programmazione',
            'description' => 'Scopri i concetti base di Laravel e come iniziare a sviluppare applicazioni web.',
            'visible' => true
        ],
        [
            'title' => 'Vita da Developer',
            'category' => 'Lifestyle',
            'description' => 'Un racconto sulla routine e le sfide quotidiane di uno sviluppatore.',
            'visible' => false
        ],
        [
            'title' => 'Design Moderno',
            'category' => 'Design',
            'description' => 'Le tendenze attuali nel web design e come applicarle ai tuoi progetti.',
            'visible' => true
        ]
    ];
    $article = $articoli[$id] ?? null;
    if (!$article || !$article['visible']) {
        abort(404);
    }
    return view('articolo', ['article' => $article]);
})->name('articolo');

Route::get('/', function () {
    $blogName = 'TechLife Blog';
    return view('welcome', ['blogName' => $blogName]);
});


Route::get('/articoli', function () {
    $articoli = [
        [
            'title' => 'Laravel: Introduzione',
            'category' => 'Programmazione',
            'description' => 'Scopri i concetti base di Laravel e come iniziare a sviluppare applicazioni web.',
            'visible' => true
        ],
        [
            'title' => 'Vita da Developer',
            'category' => 'Lifestyle',
            'description' => 'Un racconto sulla routine e le sfide quotidiane di uno sviluppatore.',
            'visible' => false
        ],
        [
            'title' => 'Design Moderno',
            'category' => 'Design',
            'description' => 'Le tendenze attuali nel web design e come applicarle ai tuoi progetti.',
            'visible' => true
        ]
    ];
    // Mostra solo articoli visibili
    $articoliVisibili = array_filter($articoli, fn($a) => $a['visible']);
    return view('articoli', ['articoli' => $articoliVisibili]);
});


Route::view('/contatti', 'contatti');


Route::get('/chi-siamo', function () {
    $team = [
        [
            'nome' => 'Alessandro Rossi',
            'ruolo' => 'Project Manager',
            'email' => 'alessandro.rossi@example.com'
        ],
        [
            'nome' => 'Giulia Bianchi',
            'ruolo' => 'Sviluppatrice',
            'email' => 'giulia.bianchi@example.com'
        ],
        [
            'nome' => 'Luca Verdi',
            'ruolo' => 'Designer',
            'email' => 'luca.verdi@example.com'
        ]
    ];
    $titolo = count($team) > 1 ? 'Chi Siamo' : 'Chi Sono';
    return view('chi-siamo', compact('titolo', 'team'));
});
