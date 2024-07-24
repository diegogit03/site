@extends('layout')

@section('content')
    <div class="container" style="padding: 5rem 0">
        <img class="w-100" src="{{ asset('/storage/' . $article->thumb_filename) }}" alt="">

        <h2 class="text-center mb-4">{{ $article->title }}</h2>

        <div>
            {!! $article->content !!}
        </div>
    </div>
@endsection
