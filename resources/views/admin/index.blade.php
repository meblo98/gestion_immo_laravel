<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Liste des biens</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Titre</th>
                <th scope="col">localisation</th>
                <th scope="col">categorie</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>


    <tbody>
        @foreach ($biens as $bien)
      <tr>
        <td >{{ $bien->nom }}</td>
        <td >{{ $bien->localisation }}</td>
        <td >{{ $bien->categorie }}</td>
        <td >{{ $bien->statut }}</td>
        <td >
            <a class="d-inline-flex mb-3" href="{{ route('modifier', $bien->id) }}">
                <button class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-pencil"></i> Modifier
                </button>
            </a>
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

@endforeach


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
