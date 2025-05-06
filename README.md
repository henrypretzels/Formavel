##Formulário exemplo

Este é um sistema web desenvolvido em Laravel para fins didáticos, tendo com exemplo,

## 🚀 Tecnologias Utilizadas

- [Laravel 12](https://laravel.com/)
- Blade Components
- Vite
- Tailwind CSS (opcional)
- CSS tradicional (alternativa a Tailwind)

## 📁 Estrutura do Projeto

── app/
│ └── View/Components/ # Componentes Blade personalizados
├── resources/
│ ├── views/ # Views Blade (exemplo.blade.php, components, etc.)
│ └── css/app.css # Tailwind (opcional com Vite)
├── public/
│ └── style.css # CSS tradicional para estilização alternativa
├── routes/web.php # Definição das rotas
├── package.json # Dependências do frontend
├── vite.config.js # Configuração do Vite
└── README.md

## ⚙️ Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seuusuario/petshop-laravel.git
   cd petshop-laravel
   2. Instale as dependências do Laravel:

composer install

3. Instale as dependências do frontend (caso use Tailwind/Vite):

npm install

4. Copie o arquivo .env.example para .env e gere a key:

cp .env.example .env
php artisan key:generate

5. Rode o servidor de desenvolvimento:

##Desenvolvedores:
Guilherme Weimer (GuilhermeWeimer)
Henrique Nunes Prestes (henrypretzels)
Júlio Biscaíno (julio9988)
