<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


    <div class="container mt-3">
        <div class="card mb-3 p-3" style="max-width: 1200px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ $biens->url_image }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $biens->nom }}</h5>
                  <p class="card-text">{{ $biens->description }}</p>
                  <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{ $biens->localisation }}</p>
                  <p class="card-text"><i class="fa-solid fa-layer-group"></i> {{ $biens->categorie }}</p>
                  <p class="card-text"><i class="fa-solid fa-house"></i> {{ $biens->statut }}</p>
                  <p class="card-text"><small class="text-body-secondary">Modifié le {{$biens->updated_at}}</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>