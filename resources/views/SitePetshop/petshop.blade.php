<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Software para Petshops</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f7fafc;
      margin: 0;
      padding: 20px;
      text-align: center;
    }

    h1 {
      color: #2d3748;
      margin-bottom: 30px;
    }

    .imagens {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 40px;
    }

    .imagens img {
      width: 250px;
      height: auto;
      border-radius: 8px;
      transition: transform 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 8px;
      text-align: left;
      color: #4a5568;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #cbd5e0;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: #38a169;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #2f855a;
    }
  </style>
</head>
<body>

  <h1>Software Inteligente para Petshops</h1>

  <div class="imagens">
  <img src="{{ asset('public/imagens/petshop_usuario_250x150.png') }}" alt="Pessoa usando software">
  <img src="{{ asset('public/imagens/pessoa2.png') }}" alt="Pessoa 2">
  <img src="{{ asset('public/imagens/pessoa3.png') }}" alt="Pessoa 3">
</div>

  <form action="{{ route('petshop.store') }}" method="POST">
    @csrf
    <label for="nome">Nome completo:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" required>

    <button type="submit">Solicitar Demonstração</button>
  </form>

  <script src="{{ asset('js/petshop.js') }}"></script>
</body>
</html>
