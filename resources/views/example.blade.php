<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulário Exemplo</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <link rel="stylesheet" href="{{ asset('style.css') }}">

  {{-- Se ainda quiser manter o Vite (opcional) --}}
  {{-- @vite('resources/css/app.css') --}}
  {{-- @vite('resources/js/app.js') --}}
</head>
<body>
  <x-header title="GHJ Automação Generalizada" />

  <div class="container">
      <x-info-block 
          title="Soluções em Automação"
          :items="[
            'Integração de CLPs e sensores',
            'Sistemas supervisórios SCADA',
            'Internet das Coisas (IoT) para aplicações residenciais e industriais',
            'Manutenção preditiva com IA',
            'Suporte e assistência técnica'
          ]"
          content="Na GHJ Automação, unimos eficiência e inovação para transformar processos industriais ou facilitar a sua rotina com soluções inteligentes. Nossa equipe é especializada em identificar oportunidades de melhoria, propor tecnologias adequadas e acompanhar a implantação de cada projeto do início ao fim. Conheça algumas das áreas em que podemos atuar, e caso esteja interessado, solicite uma consultoria gratuíta nos campos abaixo.:"

      />
      
      <x-form />
  </div>
</body>
</html>
