@extends('Admin.master')
@section('title', 'Nouvelle utilisateurs')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Basic -->
                <div class="col-md-12">
                    <div class="card mb-6">
                        <h5 class="card-header">Nouvelle Utilisateur</h5>
                        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body demo-vertical-spacing demo-only-element">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="name">Nom</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('name') ?? ''}}" class="form-control @error('name') is -invalid @enderror"
                                            id="name" placeholder="veuillez entrer votre nom"
                                            aria-describedby="basic-default" name="name" />
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-password-toggle">
                                    <label class="form-label" for="email">Email</label>
                                    <div class="input-group">
                                        <input type="email" value="{{ old('email') ?? ''}}" class="form-control @error('email') is -invalid @enderror"
                                             placeholder="veuillez entrer votre email"
                                             name="email" />
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-password-toggle">
                                    <label class="form-label" for="nom">Mot de passe</label>
                                    <div class="input-group">
                                        <input type="password" value="{{ old('password') ?? ''}}" class="form-control @error('nom') is -invalid @enderror"
                                            id="password" placeholder="veuillez entrer votre mot de passe"
                                            aria-describedby="basic-default" name="password" />
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                               

                                <div class="form-password-toggle">
                                <label class="form-label" for="profil">Photo de profile</label>
                                <div class="input-group">
                                    <input type="file" name="profil" id="profil" class="form-control">
                                </div>
                                @error('profil')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
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


    <div class="content-backdrop fade"></div>
    </div>
@endsection
