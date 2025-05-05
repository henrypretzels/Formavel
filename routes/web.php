<?php
//para o primeiro site teste

use Illuminate\Support\Facades\Route;
Route::view('/', 'home');

//Para o site do petshop

//use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/petshop', function () {
    return view('petshop');
})->name('petshop.view');

// Simulação de POST — ainda sem lógica
Route::post('/petshop', function (Request $request) {
    // Apenas exemplo — salve no banco ou envie e-mail
    return back()->with('success', 'Formulário enviado!');
})->name('petshop.store');


?>
