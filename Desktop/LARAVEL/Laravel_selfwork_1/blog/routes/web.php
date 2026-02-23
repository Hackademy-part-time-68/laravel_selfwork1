<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/articoli', 'articoli');


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
