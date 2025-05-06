@props([
    'title' => 'Sobre este Site',
    'items' => ['Item estático 1', 'Item estático 2', 'Item estático 3'],
    'content' => 'Este é um exemplo de bloco de informações estáticas.'
])

<section class="bloco">
    <h2 class="bloco-titulo">{{ $title }}</h2>
    <p class="texto">
        {{ $content }}
    </p>
    <ul class="lista">
        @foreach ($items as $item)
            <li class="info-item">{{ $item }}</li>
        @endforeach
    </ul>
</section>
