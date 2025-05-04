<form class="bg-gray-100 p-6 rounded-lg shadow-md" action="#" method="POST">
    @csrf  <!-- Campo CSRF do Laravel, por boa prática em formulários -->
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-medium mb-1">Nome:</label>
        <input type="text" id="name" name="name" 
               class="w-full border border-gray-300 px-3 py-2 rounded" 
               placeholder="Digite seu nome">
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium mb-1">Email:</label>
        <input type="email" id="email" name="email" 
               class="w-full border border-gray-300 px-3 py-2 rounded" 
               placeholder="Digite seu email">
    </div>
    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Enviar
    </button>
</form>
