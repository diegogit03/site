<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diego Henrique de Oliveira Madero</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark text-white">
    <header class="px-5 md:px-20 flex justify-between items-center py-6 border-b-divisor border-b-2">
        <a href="{{ route('home') }}" style="width: 31px; height: 35px">
            <img src="{{ asset('logo.png') }}" class="w-full" alt="">
        </a>

        <ul class="md:flex hidden gap-3">
            <li><a href="" class="hover:text-primary transition-all">Home</a></li>
            <li><a href="" class="hover:text-primary transition-all">Blog</a></li>
        </ul>

        <button class="md:block hidden bg-primary px-5 py-2 rounded-full font-inter font-semibold">
            Entrar em contato
        </button>

        <button class="border-divisor border-2 px-3 py-4 rounded-3xl md:hidden">
            <img src="{{ asset('icons/hamburguer.png') }}" alt="">
        </button>
    </header>
    <footer class="bg-dark-secondary py-8 px-5 md:px-20 md:pt-24 md:pb-16">
        <div class="flex flex-col gap-12 md:flex-row md:justify-between md:mb-20">
            <div class="md:flex">
                <a href="{{ route('home') }}" class="md:mr-16" style="width: 31px; height: 35px">
                    <img src="{{ asset('logo.png') }}" class="w-full" style="width: 31px; height: 35px" alt="">
                </a>
                <div class="flex justify-between mt-12 md:mt-0">
                    <div class="md:mr-32">
                        <h2 class="text-secondary text-xl font-inter">Páginas</h2>
                        <div class="font-semibold flex flex-col">
                            <a href="">Blog</a>
                            <a href="">Início</a>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-secondary text-xl font-inter">Contato</h2>
                        <div class="flex flex-col">
                            <span class="font-normal"><span class="text-primary font-bold">Email:</span> dhom91718@gmail.com</span>
                            <span class="font-normal"><span class="text-primary font-bold">Telefone:</span> (18) 99826-1800</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:hidden">
                <hr class="border-divisor mb-7">
                <p class="text-center">Desenvolvido por <span class="text-primary">Diego Henrique</span></p>
            </div>
            <div class="flex flex-col items-center">
                <h2 class="text-secondary text-xl font-inter mb-4">Redes Sociais</h2>
                <div class="flex gap-3">
                    <a href="" target="__blank" class="border p-2 border-primary rounded-full flex items-center justify-center">
                        <img src="{{ asset('icons/github.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="md:block hidden">
            <hr class="border-divisor mb-7">
            <p class="text-center">Desenvolvido por <span class="text-primary">Diego Henrique</span></p>
        </div>
    </footer>
</body>
</html>
