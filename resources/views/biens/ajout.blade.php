
@extends('layout.sidebar')
@section('content')
    {{-- <h1>bienvenue,{{Auth::User()->nom}}</h1> --}}
    {{-- <form action="{{Route('User.deconnexion')}}" Method="post">

@csrf
@method('DELETE')
<button class="btn btn-danger" type="submit">deconnecter</button>
</form> --}}
    <div class="container mt-3 p-5">
        <h1 class="text-center">Ajout de bien</h1>
        <form action="{{ route('creation') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="utilisateur_id" value="{{Auth::User()->id}}">
            <div class="input-group mb-3">
                <span class="input-group-text">Titre</span>
                <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" placeholder="Titre"
                    aria-label="Username">
                <span class="input-group-text">Categorie</span>
                <select class="form-select" value="{{ old('categorie') }}" name="categorie"
                    aria-label="Default select example">
                    <option selected>selectionne une categorie</option>
                    <option value="luxe">luxe</option>
                    <option value="moyen">moyen</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Localisation</span>
                <input type="text" name="localisation" class="form-control" placeholder="Titre" aria-label="Username">
                <span class="input-group-text">Status</span>
                <select class="form-select" name="statut" value="{{ old('status') }}" aria-label="Default select example">
                    <option selected>Selectionne le statut</option>
                    <option value="occupé">occupé</option>
                    <option value="non occupé">non occupé</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Image URL</span>
                <input type="text" name="url_image" class="form-control" value="{{ old('url_image') }}"
                    placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                
                <span class="input-group-text">Prix</span>
                <input type="number" name="prix" class="form-control" placeholder="prix" aria-label="prix">
            </div>
            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" name="description" aria-label="With textarea">{{ old('description') }} </textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
        </form>
    </div>
@endsection
