@extends('Admin.master')
@section('title', 'Mofifier Article')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic -->
            <div class="col-md-6">
                <div class="card mb-6">
                    <h5 class="card-header">Modifier {{ $article->nom }}</h5>
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
                                    @error('titre')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="img">Images mis en avant</label>
                                <div class="input-group">
                                    <input type="file" name="img" id="img">
                                </div>
                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="intro">Introduction</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('intro') ?? ''}}" class="form-control @error('intro') is -invalid @enderror" id="intro"
                                        placeholder="veuillez entrer une introduction"
                                        aria-describedby="basic-default" name="intro" />
                                    @error('intro')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <label class="form-label @error('conte') is -invalid @enderror" for="content">Contenu</label>
                            <div class="input-group">
                                <br><textarea class="form-control" name="conte" id="content" aria-label="With textarea"
                                 placeholder="La contenue de l'article" style="height: 120px">{{ old('conte') ?? $article->conte }}</textarea>
                                @error('conte')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-password-toggle">
                                <label class="form-label" for="conclu">Conclusion</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('conclu') ?? $article->conclu}}" class="form-control @error('conclu') is -invalid @enderror " id="conclu"
                                        placeholder="veuillez entrer une conclusion"
                                        aria-describedby="basic-default" name="conclu" />
                                    @error('conclu')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Une liste deroulante des categories -->

                            <div class="form-password-toggle">
                                <label class="form-label @error('conte') is -invalid @enderror" for="etti">Etiquettes</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="etti"
                                        placeholder="Ex: #Sport, #223..."
                                        aria-describedby="basic-default" name="etti"/>
                                        @error('etti')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
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