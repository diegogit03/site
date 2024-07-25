@extends('layout')

@section('content')
    <div class="container" style="padding: 5rem 1rem">
        <h2>{{ $article->title }}</h2>

        <img class="w-100 my-4" style="border-radius: 1rem" src="{{ asset('/storage/' . $article->thumb_filename) }}" alt="">

        <div class="mb-4 format-article">
            {!! $article->content !!}
        </div>

        <h3 class="text-center mb-4">Comentários</h3>

        <form class="mb-4" action="{{ route('comments.store', ['article' => $article->id]) }}" method="post">
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

        <div>
            @foreach ($article->comments as $comment)
                <div style="
                    padding: 1rem;
                    display: flex;
                    gap: 1.5rem
                ">
                    <img style="width: 3.5rem; height: 3.5rem" src="https://avatar.iran.liara.run/username?username={{ $comment->author }}" alt="">
                    <div>
                        <strong>{{ $comment->author }}</strong>
                        <p>
                            {{ $comment->content }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
