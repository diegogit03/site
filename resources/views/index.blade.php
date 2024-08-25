@extends('layout')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-5 col-12">
                <img style="width: 100%; height: 20rem;border-radius: 2rem" src="https://cursinhoparamedicina.com.br/wp-content/uploads/2022/10/Paisagem-1.jpg" alt="">
            </div>
            <div class="col-md-7 col-12 py-2 d-flex flex-column justify-content-center">
                <h1 class="mb-2" style="font-size: 3rem">Olá, Sou o Diego!</h1>
                <p class="fs-4">Eu construo e desenvolvo sofware de qualidade, minha principal especialidade são aplicações backend, design de API's e integrações</p>
                <div class="mt-3">
                    <button class="btn btn-lg btn-primary" style="border-radius: 1.5rem">Entrar em contato</button>
                    <button class="btn btn-secondary">Ver portfolio</button>
                </div>
            </div>
        </div>
    </div>

    <section class="container" style="padding: 5rem 0;">
        <h3 class="text-center mb-4">Projetos</h3>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center flex-column">
                    <a href="{{ $project->link }}" class="fade-text" target="_blank">
                        <img class="w-100 " src="{{ asset('/storage/' . $project->image_filename) }}" alt="">
                        <p class="text-overlay">{{ $project->title }}</p>
                    </a>
                </div>
                @endforeach
        </div>
    </section>

    <!--
    <section class="container" style="padding-bottom: 5rem">
        <h3 class="text-center mb-4">Tecnologias</h3>
        <div class="row">
            <div class="col-2">
                <div class="bg-primary py-2 px-3 text-white text-center" style="border-radius: 2rem; height: 14rem">
                    <img class="w-100" src="https://cdn.iconscout.com/icon/free/png-256/free-php-71-458168.png?f=webp&w=256" alt="">
                    <p class="fw-bold fs-3">PHP</p>
                </div>
            </div>
            <div class="col-2">
                <div class="bg-primary py-2 px-3 text-white text-center" style="border-radius: 2rem; height: 14rem">
                    <img class="w-100" src="https://cdn.iconscout.com/icon/free/png-256/free-php-71-458168.png?f=webp&w=256" alt="">
                    <p class="fw-bold fs-3">PHP</p>
                </div>
            </div>
            <div class="col-2">
                <div class="bg-primary py-2 px-3 text-white text-center" style="border-radius: 2rem; height: 14rem">
                    <img class="w-100" src="https://cdn.iconscout.com/icon/free/png-256/free-php-71-458168.png?f=webp&w=256" alt="">
                    <p class="fw-bold fs-3">PHP</p>
                </div>
            </div>
            <div class="col-2">
                <div class="bg-primary py-2 px-3 text-white text-center" style="border-radius: 2rem; height: 14rem">
                    <img class="w-100" src="https://cdn.iconscout.com/icon/free/png-256/free-php-71-458168.png?f=webp&w=256" alt="">
                    <p class="fw-bold fs-3">PHP</p>
                </div>
            </div>
            <div class="col-2">
                <div class="bg-primary py-2 px-3 text-white text-center" style="border-radius: 2rem; height: 14rem">
                    <img class="w-100" src="https://cdn.iconscout.com/icon/free/png-256/free-php-71-458168.png?f=webp&w=256" alt="">
                    <p class="fw-bold fs-3">PHP</p>
                </div>
            </div>
            <div class="col-2">
                <div class="bg-primary py-2 px-3 text-white text-center" style="border-radius: 2rem; height: 14rem">
                    <img class="w-100" src="https://cdn.iconscout.com/icon/free/png-256/free-php-71-458168.png?f=webp&w=256" alt="">
                    <p class="fw-bold fs-3">PHP</p>
                </div>
            </div>
        </div>
    </section>
-->
@endsection
