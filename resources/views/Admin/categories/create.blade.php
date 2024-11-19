@extends('Admin.master')
@section('title', 'Nouvelle Categorie')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic -->
            <div class="col-md-6">
                <div class="card mb-6">
                <h5 class="card-header">Nouvelle Categorie</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="form-password-toggle">
                            <label class="form-label" for="titre">Nom</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="titre"
                                    placeholder="veuillez entrer le nom de la catégorie"
                                    aria-describedby="basic-default" />
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="desc">Description</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="desc"
                                    placeholder="veuillez entrer une description"
                                    aria-describedby="basic-default" />
                            </div>
                        </div>
                        <button class="btn btn-outline-primary" type="submit"
                            id="inputGroupFileAddon04">Button</button>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>


<div class="content-backdrop fade"></div>
</div>
@endsection