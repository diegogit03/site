@extends('layout')

@section('content')
    <div class="hero">
        <div class="text-white text-center">
            <h1>Diego Henrique</h1>
            <h2 class="my-3">Desenvolvedor de Sofware</h2>
            <button class="btn btn-lg btn-outline-primary">Entrar em Contato</button>
        </div>
    </div>

    <section class="container" style="padding: 5rem 0;">
        <h3 class="text-center mb-4">Portfólio</h3>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{ asset('/storage/' . $project->image_filename) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->description }}</p>
                            <a href="#" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </section>
@endsection
