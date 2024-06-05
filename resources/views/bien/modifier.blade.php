@extends('layout.sidebar')
@section('content')
<div class="container mt-3">
    <h1 class="text-center">Ajout de bien</h1>
    <form method="POST" action="{{ route('modification', $biens->id) }}" method="POST">
        {!! csrf_field() !!}
          @method("PATCH")
        <div class="input-group mb-3">
            <span class="input-group-text">Titre</span>
            <input type="text" name="nom" class="form-control" value="{{ $biens->nom }}"  placeholder="Titre" aria-label="Username">
            <span class="input-group-text">Categorie</span>
            <select class="form-select" value="{{ $biens->categorie }}"  name="categorie" aria-label="Default select example">
                <option selected></option>
                <option value="luxe">luxe</option>
                <option value="moyen">moyen</option>
              </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Localisation</span>
            <input type="text" name="localisation" value="{{ $biens->localisation }}" class="form-control" placeholder="Titre" aria-label="Username">
            <span class="input-group-text">Status</span>
            <select class="form-select" name="statut" value="{{ $biens->statut }}"  aria-label="Default select example">
                <option selected></option>
                <option value="occupé">occupé</option>
                <option value="non occupé">non occupé</option>
              </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2">Image URL</span>
            <input type="text" name="url_image" class="form-control" value="{{ $biens->url_image }}"
                placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text">Prix</span>
            <input type="number" name="prix" class="form-control" value="{{ $biens->prix }}" placeholder="prix" aria-label="prix">
          </div>
        <div class="input-group">
            <span class="input-group-text">Description</span>
            <textarea class="form-control" name="description" aria-label="With textarea">{{ $biens->description }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Modifer</button>
    </form>
</div>

@endsection
