<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout de bien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-3">
        <h1 class="text-center">Ajout de bien</h1>
        <form action="{{ route('modifier') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text">Titre</span>
                <input type="text" name="nom" class="form-control" value="{{ old('nom') }}"  placeholder="Titre" aria-label="Username">
                <span class="input-group-text">Categorie</span>
                <select class="form-select" value="{{ old('categorie') }}"  name="categorie" aria-label="Default select example">
                    <option selected></option>
                    <option value="luxe">luxe</option>
                    <option value="moyen">moyen</option>
                  </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Localisation</span>
                <input type="text" name="localisation" class="form-control" placeholder="Titre" aria-label="Username">
                <span class="input-group-text">Status</span>
                <select class="form-select" name="statut" value="{{ old('status') }}"  aria-label="Default select example">
                    <option selected></option>
                    <option value="occupé">occupé</option>
                    <option value="non occupé">non occupé</option>
                  </select>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="url_image" class="form-control" value="{{ old('url_image') }}"  placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Image URL</span>
              </div>
            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" name="description" aria-label="With textarea">{{ old('description') }} </textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
