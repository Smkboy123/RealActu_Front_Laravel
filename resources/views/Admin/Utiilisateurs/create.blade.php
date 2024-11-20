@extends('Admin.master')
@section('title', 'Nouvelle Utilisateur')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic -->
            <div class="col-md-6">
                <div class="card mb-6">
                <h5 class="card-header">Nouveau Utilisateur</h5>
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
                            <label class="form-label" for="email">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="email"
                                    placeholder="exemple@gmail.com"
                                    aria-describedby="basic-default" />
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="email">Mot de passe</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="email"
                                    placeholder="*********"
                                    aria-describedby="basic-default" />
                            </div>
                        </div>
                        <div class="form-password-toggle">
                            <label class="form-label" for="email">Cofirmation de Mot de passe</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="email"
                                    placeholder="*********"
                                    aria-describedby="basic-default" />
                            </div>
                        </div>
                        <button class="btn btn-outline-primary" type="submit"
                            id="inputGroupFileAddon04">Ajouter</button>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>


<div class="content-backdrop fade"></div>
</div>
@endsection