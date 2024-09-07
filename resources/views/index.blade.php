@extends('layout')

@section('content')
    <section class="flex flex-col pt-12 pb-24 md:pb-56 md:pt-20 items-center font-inter bg-grid-pattern relative">
        <h1 class="font-inter text-2xl font-bold text-center md:text-4xl">Bem-Vindo(a) a uma jornada de<br/> soluções tecnológicas</h1>
        <p class="font-inter text-sm opacity-40 text-center mt-4 mb-5">Eu construo e desenvolvo sofware de qualidade, minha principal  especialidade são aplicações backend, design de API's e integrações</p>
        <div class="flex items-center">
            <button class="bg-primary px-5 py-2 rounded-full font-inter font-semibold mr-4">
                Entrar em contato
            </button>
            <a href="">Ver Portfolio</a>
        </div>
        {{-- <div class="gradients"></div> --}}
    </section>
    <section class="bg-white text-black py-5 flex justify-center font-inter text-xl overflow-hidden whitespace-nowrap relative">
        <div class="animate-marquee whitespace-nowrap md:animate-none">
            Desenvolvimento Backend   — Design de APIs    —    Integrações de Pagamentos    —   Frontend
        </div>
        <div class="animate-marquee2 absolute whitespace-nowrap md:hidden">
            Desenvolvimento Backend   — Design de APIs    —    Integrações de Pagamentos    —   Frontend
        </div>
    </section>
    <section class="pt-10 pb-14 flex items-center md:items-start flex-col md:flex-row md:px-52">
        <div class="w-[80%] md:w-[110rem] md:h-[34rem] h-[25rem] bg-primary rounded-[3rem] mb-10 md:mr-12"></div>
        <div class="flex flex-col items-center md:items-start">
            <p class="mb-3 text-sm font-inter text-[#ffffff40] tracking-widest">SOBRE MIM</p>
            <h2 class="mb-7 text-2xl md:text-3xl font-bold">Olá, sou o <span class="text-primary">Diego!</span></h2>
            <p class="mb-10 font-normal font-inter text-center px-5 md:text-left md:text-[1.1rem] md:p-0">Me chamo Diego Henrique, um desenvolvedor especializado em aplicações backend, design de API's e integrações. Tenho 5 anos de experiência no mercado e adoro criar soluções criativas para problemas complexos. Trabalho com Javascript e Python e estou sempre em busca de novos desafios.</p>
            <div class="flex items-center mb-12 md:mb-24">
                <button class="bg-primary px-5 py-2 rounded-full font-inter font-semibold mr-4">
                    Entrar em contato
                </button>
                <a href="">Ver Portfolio</a>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-10 text-center md:text-left">Minhas <span class="text-primary">Redes Sociais</span></h2>
                <div class="flex gap-5">
                    <a href="" target="__blank" class="border p-2 border-primary rounded-xl w-14 h-14 flex items-center justify-center">
                        <img src="{{ asset('icons/github.svg') }}" alt="">
                    </a>
                    <a href="" target="__blank" class="border p-2 border-primary rounded-xl w-14 h-14 flex items-center justify-center">
                        <img src="{{ asset('icons/github.svg') }}" alt="">
                    </a>
                    <a href="" target="__blank" class="border p-2 border-primary rounded-xl w-14 h-14 flex items-center justify-center">
                        <img src="{{ asset('icons/github.svg') }}" alt="">
                    </a>
                    <a href="" target="__blank" class="border p-2 border-primary rounded-xl w-14 h-14 flex items-center justify-center">
                        <img src="{{ asset('icons/github.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="py-14 px-5 lg:px-20">
        <div class="mb-5">
            <h2 class="text-2xl font-inter font-bold">Portfolio</h2>
        </div>
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5">
            <div class="relative flex items-center justify-center overflow-hidden shadow-xl w-full h-64 rounded-3xl">
                <div class="absolute w-full h-full bg-center bg-cover" style="background-image: url('https://fastly.picsum.photos/id/524/200/200.jpg?hmac=t6LNfKKZ41wUVh8ktcFHag3CGQDzovGpZquMO5cbH-o')"></div>
                <div class="absolute w-full h-full bg-black opacity-50">
                </div>
                <div class="absolute text-center">
                    <h3 class="text-xl font-inter text-white mb-2 font-bold">
                        API Nexus
                    </h3>
                    <p class="text-sm">13 Jul 2024</p>
                </div>
            </div>
            <div class="relative flex items-center justify-center overflow-hidden shadow-xl w-full h-64 rounded-3xl">
                <div class="absolute w-full h-full bg-center bg-cover" style="background-image: url('https://fastly.picsum.photos/id/524/200/200.jpg?hmac=t6LNfKKZ41wUVh8ktcFHag3CGQDzovGpZquMO5cbH-o')"></div>
                <div class="absolute w-full h-full bg-black opacity-50">
                </div>
                <div class="absolute text-center">
                    <h3 class="text-xl font-inter text-white mb-2 font-bold">
                        API Nexus
                    </h3>
                    <p class="text-sm">13 Jul 2024</p>
                </div>
            </div>
            <div class="relative flex items-center justify-center overflow-hidden shadow-xl w-full h-64 rounded-3xl">
                <div class="absolute w-full h-full bg-center bg-cover" style="background-image: url('https://fastly.picsum.photos/id/524/200/200.jpg?hmac=t6LNfKKZ41wUVh8ktcFHag3CGQDzovGpZquMO5cbH-o')"></div>
                <div class="absolute w-full h-full bg-black opacity-50">
                </div>
                <div class="absolute text-center">
                    <h3 class="text-xl font-inter text-white mb-2 font-bold">
                        API Nexus
                    </h3>
                    <p class="text-sm">13 Jul 2024</p>
                </div>
            </div>
            <div class="relative flex items-center justify-center overflow-hidden shadow-xl w-full h-64 rounded-3xl">
                <div class="absolute w-full h-full bg-center bg-cover" style="background-image: url('https://fastly.picsum.photos/id/524/200/200.jpg?hmac=t6LNfKKZ41wUVh8ktcFHag3CGQDzovGpZquMO5cbH-o')"></div>
                <div class="absolute w-full h-full bg-black opacity-50">
                </div>
                <div class="absolute text-center">
                    <h3 class="text-xl font-inter text-white mb-2 font-bold">
                        API Nexus
                    </h3>
                    <p class="text-sm">13 Jul 2024</p>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="py-14 px-5">
        <div class="mb-10">
            <div class="text-center mb-14">
                <h2 class="font-inter font-semibold text-2xl">Conhecimentos</h2>
                <p class="font-inter font-normal text-[#ffffff40] text-sm">Clique nos cards para ler mais. </p>
            </div>
            <div class="grid grid-cols-5 gap-4">
                <button>JS</button>
                <button>JS</button>
                <button>JS</button>
                <button>JS</button>
                <button>JS</button>
                <button>JS</button>
                <button>JS</button>
                <button>JS</button>
                <button>JS</button>
                <button>JS</button>
            </div>
        </div>
        <div class="flex justify-around mb-14">
            <div class="text-center">
                <h3 class="text-primary text-2xl font-bold">+2</h3>
                <p>Anos de experiência</p>
            </div>
            <div class="text-center">
                <h3 class="text-primary text-2xl font-bold">+150</h3>
                <p>Projetos realizados</p>
            </div>
            <div class="text-center">
                <h3 class="text-primary text-2xl font-bold">+2</h3>
                <p>Anos de experiência</p>
            </div>
        </div>
    </section>
@endsection
