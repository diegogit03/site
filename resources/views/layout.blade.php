<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diego Henrique de Oliveira Madero</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-none  py-3" style="margin-bottom: 3rem">
        <div class="container d-flex align-items-center">
          <a class="navbar-brand"  style="width: 1.5rem" href="{{ route('home') }}">
            <img class="w-100" src="{{ asset('logo.png') }}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} fw-bold" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('blog') || request()->routeIs('blog.article') ? 'active' : '' }} fw-bold" href="{{ route('blog') }}">Blog</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="bg-primary text-white" style="padding: 5rem 0">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4>Redes Sociais</h4>
                    <div class="d-flex social-links" style="gap: 1rem">
                        <a href="https://www.github.com/diegogit03" class="text-white fs-2" target="_blank"><i class="bi bi-github"></i></a>
                        <a class="text-white fs-2" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-6">
                    <h4>Contatos</h4>
                    <p><i class="bi bi-envelope-fill"></i> dhom91718@gmail.com</p>
                    <p><i class="bi bi-telephone-fill"></i> (18) 99826-1800</p>
                </div>
            </div>
            <div class="text-center pt-4">
                Desenvolvido por <span class="fw-bold">Diego Henrique</span>.
            </div>
        </div>
    </footer>
</body>
</html>
