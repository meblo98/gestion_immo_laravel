@extends('layout.sidebar')
@section('content')
    <div class="card-body">
        <h4 class="card-title">Hoverable Table</h4>
        <div class="col-lg-6 grid-margin stretch-card">
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
                                    <td><label class="badge badge-primary">{{$bien->statut}}</label></td>
                                    <td>{{ $bien->prix }}</td>
                                    <td>
                                        <label class="badge badge-danger">Modifer</label>
                                        <form action="{{ route('delete', $bien->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>
                                                Supprimer</button>
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
