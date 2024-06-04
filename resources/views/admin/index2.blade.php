@extends('layout.sidebar')
@section('content')
    <div class="container mt-5 p-5">
        <h4 class="card-title">Liste des Biens</h4>
        <div class="">
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
                        @foreach ($biens as $bien)
                            <tbody>
                                <tr>
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
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-trash"></i>
                                                </button>
                                        </form>
                                    </td>
                                </tr>

                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
