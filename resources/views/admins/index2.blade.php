@extends('layout.sidebar')
@section('content')
    <div class="container mt-5 p-5">
        <h4 class="card-title">Liste des Biens</h4>
        <div class="">
            <div class="page-header flex-wrap">
                <div class="header-left">

                </div>
                <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                    <div class="d-flex align-items-center">
                        <a href="#">
                            <p class="m-0 pe-3">Dashboard</p>
                        </a>
                    </div>
                    <a href="{{ route('ajout') }}">
                        <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                            <i class="mdi mdi-plus-circle"></i>Ajouter un bien
                        </button>
                    </a>
                </div>
            </div>
            <div class="card">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Localisation</th>
                                <th>Status</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                @foreach ($biens as $bien)
                                    <td>{{ $bien->nom }}</td>
                                    <td>{{ $bien->localisation }}</td>
                                    <td><label class="badge badge-primary">{{ $bien->statut }}</label></td>
                                    <td>{{ $bien->prix }}</td>
                                    <td>
                                        <a class="btn d-inline-flex mb-3" href="{{ route('index3', $bien->id) }}">
                                            <i class="fa fa-edit
                                            "> </i>
                                        </a>
                                        <a class="btn d-inline-flex mb-3" href="{{ route('detailadmin', $bien->id) }}">
                                            <i class="fa fa-eye
                                            "> </i>
                                        </a>
                                        <form action="{{ route('delete', $bien->id) }}" method="POST"
                                            style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>

                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
