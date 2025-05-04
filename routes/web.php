<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ajout de la route pour le pop-up d'authentification
Route::get('/auth-popup', function () {
    return view('auth_popup');
});