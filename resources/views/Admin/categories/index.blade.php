@extends('Admin.master')
@section('title', 'Nouvelle Categorie')
@section('content')
@extends('template.master')

@section('content')
    <div class="container">
        <h1>Catégories</h1>
        <ul>
            @foreach($categories as $category)
                <li>
                    <strong>{{ $category->name }}</strong> - {{ $category->articles->count() }} articles
                </li>
            @endforeach
        </ul>
    </div>
@endsection
