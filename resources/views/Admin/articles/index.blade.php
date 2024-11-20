@extends('Admin.master')
@section('title', 'Nouveau Article')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card-body my-4 d-flex flex-row-reverse">
            <div class="demo-inline-spacing">
                <a href="{{ route('articles.create') }}" class="btn btn-primary">Nouvelle Article</a>
            </div>
        </div>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Liste des Articles</h5>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>introduction</th>
                            <th>Catégorie</th>
                            <th>Date de publication</th>
                            <th>Nombre de commentaire</th>
                            <th>Source</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($articles as $article)

                        <td>
                            <span>{{ substr($article->titre, 0, 20) }}...</span>
                        </td>

                        <td><span>{{ substr($article->introduction, 0, 15) }}...</span>
                        </td>

                        <td><span>{{ $article->category->nom }}</span>
                        </td>

                        <td>
                            <span>{{ $article->created_at->format("d/m/Y") }}</span>
                        </td>
                        <td><span>pas de commentaire</span>
                        </td>
                        <td><span>{{ substr($article->source, 0, 15) }}...</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item waves-effect" href="{{ route('articles.edit', $article) }}"><i
                                            class="ri-pencil-line me-1"></i> Editer</a>
                                    <a class="dropdown-item waves-effect" href="javascript:void(0);"><i
                                            class="ri-delete-bin-6-line me-1"></i> Supprimer</a>
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