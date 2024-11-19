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
                            <label class="form-label" for="titre">Titre</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="titre"
                                    placeholder="veuillez entrer le titre de l'article"
                                    aria-describedby="basic-default" />
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="intro">Introduction</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="intro"
                                    placeholder="veuillez entrer une introduction"
                                    aria-describedby="basic-default" />
                            </div>
                        </div>

                        <label class="form-label" for="content">Contenu</label>
                        <div class="input-group">
                            <br><textarea class="form-control" id="content" aria-label="With textarea" placeholder="La contenue de l'article" style="height: 120px"></textarea>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="conclu">Conclusion</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="conclu"
                                    placeholder="veuillez entrer une conclusion"
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