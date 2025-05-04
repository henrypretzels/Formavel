@props(['title'])  <!-- Define o atributo 'title' que pode ser passado ao componente -->

<header class="bg-blue-600 p-4">
    <h1 class="text-3xl text-white text-center font-bold">
        {{ $title }}
    </h1>
</header>
