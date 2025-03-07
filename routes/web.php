<?php

use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rota para a página sobre
Route::get('/about', function (){
    return view('about');
});

// Rota para a página contato
Route::get('/contact', function (){
    return view('contact');
});

// Rota para a página livros
Route::get('/books', function (){
    return view('books');
});