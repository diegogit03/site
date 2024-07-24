<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diego Henrique de Oliveira Madero</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="bg-secondary text-white" style="padding: 5rem 0">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4>Redes Sociais</h4>
                    <a class="btn btn-outline-info"><i class="bi bi-github"></i></a>
                    <a class="btn btn-outline-info"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="col-6">
                    <h4>Contatos</h4>
                    <p><i class="bi bi-envelope-fill"></i> dhom91718@gmail.com</p>
                    <p><i class="bi bi-telephone-fill"></i> (18) 99826-1800</p>
                </div>
            </div>
            <div class="text-center pt-4">
                Desenvolvido por <span class="text-primary">Diego Henrique</span>.
            </div>
        </div>
    </footer>
</body>
</html>
