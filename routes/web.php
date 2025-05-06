<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Página principal — GHJ Automação
Route::get('/', function () {
    return view('example'); // novo nome da view
})->name('automacao.view');

// Simulação de envio de formulário — sem lógica ainda
Route::post('/contato', function (Request $request) {
    // Aqui você pode adicionar lógica de validação, envio de e-mail ou salvar no banco
    return back()->with('success', 'Formulário enviado com sucesso!');
})->name('automacao.contato');
