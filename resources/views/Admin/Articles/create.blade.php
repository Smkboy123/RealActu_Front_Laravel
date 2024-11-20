@extends('Admin.master')
@section('title', 'Nouvelle Article')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic -->
            <div class="col-md-6">
                <div class="card mb-6">
                    <h5 class="card-header">Nouvelle Articles</h5>
                    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            <div class="form-password-toggle">
                                <label class="form-label" for="titre">Titre</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('titre') ?? ''}}" class="form-control @error('titre') is -invalid @enderror " id="titre"
                                        placeholder="veuillez entrer le titre de l'article"
                                        aria-describedby="basic-default" name="titre" />
                                </div>
                                @error('titre')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="image">Images mis en avant</label>
                                <div class="input-group">
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="intro">Introduction</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('introduction') ?? ''}}" class="form-control @error('introduction') is -invalid @enderror" id="introduction"
                                        placeholder="veuillez entrer une introduction"
                                        aria-describedby="basic-default" name="introduction" />
                                </div>
                                @error('introduction')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <label class="form-label @error('contenu') is -invalid @enderror" for="contenu">Contenu</label>
                            <div class="input-group">
                                <br><textarea class="form-control" name="contenu" id="contenu" aria-label="With textarea" placeholder="La contenue de l'article" style="height: 120px">{{ old('conte') ?? ''}}</textarea>

                            </div>
                            @error('contenu')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-password-toggle">
                                <label class="form-label" for="conclusion">Conclusion</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('conclusion') ?? ''}}" class="form-control @error('conclusion') is -invalid @enderror " id="conclusion"
                                        placeholder="veuillez entrer une conclusion"
                                        aria-describedby="basic-default" name="conclusion" />
                                </div>
                                @error('conclusion')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
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
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label @error('etiquette') is -invalid @enderror" for="etiquette">Etiquettes</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="etiquette"
                                        placeholder="Ex: #Sport, #223..."
                                        aria-describedby="basic-default" name="etiquette" />
                                </div>
                                @error('etiquette')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="source">Source(facultative)</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('source') ?? ''}}" class="form-control @error('source') is -invalid @enderror " id="source"
                                        placeholder="veuillez entrer la source de l'article"
                                        aria-describedby="basic-default" name="source" />
                                </div>
                                @error('source')
                                <span class="text-danger">{{ $message }}</span>
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