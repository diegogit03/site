@extends('layout')

@section('content')
    <div class="container" style="padding: 5rem 0">
        <h2>{{ $article->title }}</h2>

        <img class="w-100 my-4" style="border-radius: 1rem" src="{{ asset('/storage/' . $article->thumb_filename) }}" alt="">

        <div class="mb-4">
            {!! $article->content !!}
        </div>

        <form action="{{ route('comments.store', ['article' => $article->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="author">Autor</label>
                <input class="form-control" type="text" name="author" id="author" placeholder="autor">
            </div>
            <div class="form-group my-2">
                <label for="content">Contéudo</label>
                <textarea class="form-control" type="text" name="content" id="" placeholder="conteúdo"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <ul>
            @foreach ($article->comments as $comment)
                <li>{{ $comment->content }}</li>
            @endforeach
        </ul>
    </div>
@endsection
