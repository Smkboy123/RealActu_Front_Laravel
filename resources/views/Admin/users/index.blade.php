@extends('Admin.master')
@section('title', 'Nouvelle Categorie')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card-body my-4 d-flex flex-row-reverse">
                <div class="demo-inline-spacing">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Nouvelle Catégorie</a>
                </div>
            </div>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Liste des categories</h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($categories as $category)
                                <tr>
                                    <td><span>{{ $category->nom }}</span>
                                    </td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="ri-more-2-line"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item waves-effect"
                                                    href="{{ route('categories.edit', $category) }}"><i
                                                        class="ri-pencil-line me-1"></i> Editer</a>
                                                <form action="{{ route('categories.destroy', $category) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item waves-effect" href="javascript:void(0);"><i
                                                            class="ri-delete-bin-6-line me-1"></i> Supprimer</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->

            <hr class="my-12">

        </div>
        <!-- / Content -->

        <!-- Footer -->

        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection
