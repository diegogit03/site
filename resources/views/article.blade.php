@extends('layout')

@section('content')
    <div class="container" style="padding: 5rem 0">
        <h2>{{ $article->title }}</h2>

        <img class="w-100 my-4" style="border-radius: 1rem" src="{{ asset('/storage/' . $article->thumb_filename) }}" alt="">

        <div>
            {!! $article->content !!}
        </div>
    </div>
@endsection
