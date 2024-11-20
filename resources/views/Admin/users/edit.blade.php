@extends('Admin.master')
@section('title', 'Modifier Categorie')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Basic -->
                <div class="col-md-12">
                    <div class="card mb-6">
                        <h5 class="card-header">Modifier - {{ $category->nom }}</h5>
                        <form action="{{ route('categories.update', $category) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body demo-vertical-spacing demo-only-element">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="titre">Nom</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('nom') ?? $category->nom }}"
                                            class="form-control @error('nom') is -invalid @enderror" id="titre"
                                            placeholder="veuillez entrer le nom de la catégorie"
                                            aria-describedby="basic-default" name="nom" />
                                        @error('nom')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-password-toggle">
                                    <label class="form-label" for="desc">Description</label>
                                    <div class="input-group">
                                        <textarea class="form-control @error('description') is -invalid @enderror" id="desc"
                                            placeholder="veuillez entrer une description" aria-describedby="basic-default" name="description">{{ old('description') ?? $category->description }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary" type="submit"
                                    id="inputGroupFileAddon04">Modifier</button>
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
