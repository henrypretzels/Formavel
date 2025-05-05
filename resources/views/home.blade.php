<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo Laravel + Tailwind</title>
    @vite('resources/css/app.css')  <!-- Importa o CSS gerado pelo Tailwind via Vite -->
</head>
<body class="bg-white">
    <!-- Utilizando os componentes Blade criados -->
    <x-header title="Meu Site Laravel"/>
    <div class="max-w-2xl mx-auto p-6">
        <x-info-block />
        <div class="mt-6">
            <x-form />
        </div>
    </div>
</body>
</html>
