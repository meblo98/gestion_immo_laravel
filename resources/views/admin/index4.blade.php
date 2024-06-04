{{-- <div class="container mt-3">
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
</div> --}}
    <!-- Page content-->
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

    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">

                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">Bienvenu dans la poste {{ $biens->nom }} !</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posté le {{ $biens->created_at }} par meblo barham</div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light"
                            href="#!">{{ $biens->localisation }}</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="{{ $biens->url_image }}" alt="..." />
                    </figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">{{ $biens->description }}</p>
                        <p class="fs-5 mb-4 d-flex">
                  
                    </section>
                </article>

            </div>
            <!-- Side widgets-->

        </div>
    </div>
    
</body>
</html>