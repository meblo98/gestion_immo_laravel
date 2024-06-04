<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>

</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach ($biens as $bien)
        <div class="col">
          <div class="card shadow-sm">
             {{-- <a href="{{ route('ajout') }}"></a> --}}
      
        <a href="{{ route('detail', $bien->id) }}">
        <img src="{{$bien->url_image}}" class="card-img-top" alt="photo du bien">
        </a>
            <div class="card-body">
              <p class="card-text">{{ $bien->categorie }}</p>
              <p class="card-text">{{ $bien->description }}</p>
              <p><i class="fa-solid fa-location-dot" style="color: #74C0FC;">{{ $bien->localisation}}</i></p>
              <hr>
              <div>
              <p><i class="fa-solid fa-clock" style="color: #74C0FC;"></i>{{ $bien->created_at}}</p>
              </div>
              <div class="d-flex justify-content-between align-items-center">
              
            
                <div class="btn-group">
                <a href="{{ route('detail', $bien->id) }}">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  </a>
              
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des biens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center">Liste des biens</h1>
        {{-- <a href="{{ route('ajout') }}"></a> --}}
        @foreach ($biens as $bien)

        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{$bien->url_image}}" class="card-img-top" alt="photo du bien">
                    <div class="card-body">
                      <h5 class="card-title">{{$bien->nom}}</h5>
                      <p class="card-text">{{ $bien->categorie }}</p>
                      <a href="{{ route('detail', $bien->id) }}" class="btn btn-primary">Plus de detail</a>
                    </div>
                  </div>
            </div>
        </div>

        @endforeach
    </div>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html> -->
