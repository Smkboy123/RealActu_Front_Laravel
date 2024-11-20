@extends('Admin.master')
@section('title', 'Modifier Article')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic -->
            <div class="col-md-6">
                <div class="card mb-6">
                    <h5 class="card-header">Modifier--{{ $article->titre }}</h5>
                    <form action="{{ route('articles.update', $article) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            <div class="form-password-toggle">
                                <label class="form-label" for="titre">Titre</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('titre') ?? $article->titre}}" class="form-control @error('titre') is -invalid @enderror " id="titre"
                                        placeholder="veuillez entrer le titre de l'article"
                                        aria-describedby="basic-default" name="titre" />
                                </div>
                            </div>
                            @error('titre')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            <div class="form-password-toggle">
                                <label class="form-label" for="image">Images mis en avant</label>
                                <div class="input-group">
                                    <input type="file" name="image" id="image">
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="introduction">Introduction</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('introduction') ?? $article->introduction}}" class="form-control @error('introduction') is -invalid @enderror" id="introduction"
                                        placeholder="veuillez entrer une introduction"
                                        aria-describedby="basic-default" name="introduction" />
                                </div>
                            </div>
                            @error('introduction')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror

                            <label class="form-label @error('contenu') is -invalid @enderror" for="contenu">Contenu</label>
                            <div class="input-group">
                                <br><textarea class="form-control" name="contenu" id="contenu" aria-label="With textarea"
                                    placeholder="La contenue de l'article" style="height: 120px">{{ old('contenu') ??  $article->contenu}}</textarea>

                            </div>
                            @error('contenu')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            <div class="form-password-toggle">
                                <label class="form-label" for="conclusion">Conclusion</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('conclusion') ?? $article->conclusion}}" class="form-control @error('conclusion') is -invalid @enderror " id="conclu"
                                        placeholder="veuillez entrer une conclusion"
                                        aria-describedby="basic-default" name="conclusion" />
                                    @error('conclusion')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Une liste deroulante des categories -->
                            <div class="form-password-toggle">
                                <label class="form-label @error('category_id') is -invalid @enderror" for="etiquette">Categorie</label>
                                <div class="input-group">
                                    <select type="text" class="form-select" id="category_id"
                                        aria-describedby="basic-default" name="category_id">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('category_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror


                                <div class="form-password-toggle">
                                    <label class="form-label @error('etiquette') is -invalid @enderror" for="etiquette">Etiquettes</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('etiquette') ?? $article->etiquette}}" class="form-control" id="etiquette"
                                            placeholder="Ex: #Sport, #223..."
                                            aria-describedby="basic-default" name="etiquette" />
                                        @error('etiquette')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-password-toggle">
                                <label class="form-label" for="source">Source(facultative)</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('source') ?? $article->source}}" class="form-control @error('source') is -invalid @enderror " id="titre"
                                        placeholder="veuillez entrer la source de l'article"
                                        aria-describedby="basic-default" name="source" />
                                </div>
                                @error('source')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <br>
                                <button class="btn btn-outline-primary" type="submit"
                                    id="inputGroupFileAddon04">Enregistrer</button>
                            </div>
                    </form>
                </div>
            </div>


        </div>

    </div>
</div>


<div class="content-backdrop fade"></div>
</div>
@endsection