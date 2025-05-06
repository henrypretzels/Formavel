<form action="#" method="POST">
    @csrf
    <div class="form-campo">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" id="name" name="name" class="form-input">
    </div>
    <div class="form-campo">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-input">
    </div>
    <button type="submit" class="form-botao">Enviar</button>
</form>
