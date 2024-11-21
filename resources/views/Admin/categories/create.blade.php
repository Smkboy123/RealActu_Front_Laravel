@extends('Admin.master')
@section('title', 'Nouvelle Categorie')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
            <div class="container">
@if (session('success'))
<div class=".alert alert-success">
    {{session('success')}}
</div>
@endif
</div>
                <!-- Basic -->
                <div class="col-md-12">
                    <div class="card mb-6">
                        <h5 class="card-header">Nouvelle Categorie</h5>
                        <form action="{{ route('categories.store') }}" method="post">
                            @csrf
                            <div class="card-body demo-vertical-spacing demo-only-element">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="titre">Nom</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('nom') ?? ''}}" class="form-control @error('nom') is -invalid @enderror"
                                            id="titre" placeholder="veuillez entrer le nom de la catégorie"
                                            aria-describedby="basic-default" name="nom" />
                                        @error('nom')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-password-toggle">
                                    <label class="form-label @error('description') is -invalid @enderror"
                                        for="desc">Description</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="desc"
                                            placeholder="veuillez entrer une description"
                                            aria-describedby="basic-default" name="description" >{{ old('description') ?? "" }}</textarea>
                                        @error('nom')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary" type="submit"
                                    id="inputGroupFileAddon04">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>


    <div class="container">
@if (session('success'))
<div class=".alert alert-success">
    {{session('success')}}
</div>
@endif
</div>
    </div>
@endsection
