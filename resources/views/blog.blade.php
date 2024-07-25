@extends('layout')

@section('content')
    <div class="container" style="padding: 5rem 0">
        <h2 class="text-center mb-2">Artigos</h2>

        <div class="row mb-4">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4">
                    <img class="w-100 my-4" style="border-radius: 1rem; height: 15rem" src="{{ asset('/storage/' . $article->thumb_filename) }}" alt="">
                    <h3 class="fs-5">
                        <a href="{{ route('blog.article', ['article' => $article->id]) }}">{{ $article->title }}</a>
                    </h3>
                </div>
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
@endsection
