<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des biens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center">Liste des biens</h1>
        {{-- <a href="{{ route('ajout') }}"></a> --}}
        @foreach ($biens as $bien)

        <div class="card" style="width: 18rem;">
            <img src="{{$bien->url_image}}" class="card-img-top" alt="photo du bien">
            <div class="card-body">
              <h5 class="card-title">{{$bien->nom}}</h5>
              <p class="card-text">{{ $bien->categorie }}</p>
              <a href="{{ route('detail', $bien->id) }}" class="btn btn-primary">Plus de detail</a>
            </div>
          </div>
            
        @endforeach
    </div>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>