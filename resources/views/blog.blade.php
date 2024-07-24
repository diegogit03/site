@extends('layout')

@section('content')
    <div class="container" style="padding: 5rem 0">
        <h2 class="text-center mb-2">Artigos</h2>

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-lg-6">
                    <a href="{{ route('blog.article', ['article' => $article->id]) }}">{{ $article->title }}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
