@extends('template.master')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p><strong>Catégorie :</strong> {{ $article->category->name }}</p>
        <p><strong>Auteur :</strong> {{ $article->author->name }}</p>
        <p>{{ $article->content }}</p>

        <h3>Commentaires</h3>
        @foreach($article->commentaires as $commentaire)
            <div class="commentaire">
                <p><strong>{{ $commentaire->visiteur->name }} :</strong></p>
                <p>{{ $commentaire->content }}</p>
            </div>
        @endforeach
    </div>
@endsection
