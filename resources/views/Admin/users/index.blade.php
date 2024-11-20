@extends('Admin.master')
@section('title', 'Liste des utilisateurs')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Data Tables -->
                <div class="col-12">
                    <div class="card overflow-hidden">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th class="text-truncate">Photo</th>
                                        <th class="text-truncate">Nom</th>
                                        <th class="text-truncate">Email</th>
                                        <th class="text-truncate">Date d'inscription</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm me-4">
                                                        <!-- Affiche l'image de profil si elle existe, sinon une image par défaut -->
                                                        <img src="{{ asset($user->profil ? 'storage/' . $user->profil : 'assets/img/avatars/default.png') }}" 
                                                            alt="profil"
                                                            class="rounded-circle"
                                                            style="width: 40px; height: 40px; object-fit: cover;">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">{{ $user->name }}</td>
                                            <td class="text-truncate">{{ $user->email }}</td>
                                            <td class="text-truncate">{{ $user->created_at->format('d/m/Y') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted">Aucun utilisateur trouvé.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/ Data Tables -->
            </div>
        </div>
    </div>
@endsection
