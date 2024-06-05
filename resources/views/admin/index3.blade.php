<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center">Modifer un bien</h1>
        <div class="col">
            <a class="btn btn-dark" href="{{ route('admin2') }}">Retour</a>
        </div>
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

</body>
</html>
