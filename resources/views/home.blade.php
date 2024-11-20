@extends('template.master') <!-- Votre fichier template principal -->

@section('content')
    <div class="container">
        <h1>Bienvenue dans votre Journal Web</h1>
        <div class="articles">
            @foreach($articles as $article)
                <div class="article">
                    <h2>{{ $article->title }}</h2>
                    <p><strong>Catégorie :</strong> {{ $article->category->name }}</p>
                    <p><strong>Auteur :</strong> {{ $article->author->name }}</p>
                    <p>{{ Str::limit($article->content, 150) }}</p>
                    <a href="{{ route('articles.show', $article->id) }}">Lire la suite</a>
                </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
