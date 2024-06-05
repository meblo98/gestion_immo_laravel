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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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
      .date{
        display: flex;
        justify-content:space-between;
      }
      #prix{
        color: red;
        font-size: 18px;
        font-weight: bolder;
      }
      #categorie{
        color: grey;

      }
      .concte{
        color: black;
        border: none;
        margin: 10px;
        background-color: #F8F8FA;
        font-weight: bolder;
      }
      .button{
        margin-right: 10%;
      }
      #plublier{
        font-weight: bolder;
        
      }
      .card{
        width: 80%;
      }
      #plublier span{
        font-size: 18px;
      }
      #date{
        font-weight: black;
        margin: 10px;
      }
      i{
        margin: 10px;
      }
      /*search box css start here*/
.search-sec{
    padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
@media (min-width: 992px){
    .search-sec{
        position: relative;
        top: -114px;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}
      
      </style>

    
  </head>
  <body>
    
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Locations & Cie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Acvueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Apropos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
      </ul>
    
      </div>
    </div>
  </div>
</nav>
</header>

<main>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://exterieur.housekeeping.tn/wp-content/uploads/2020/01/1580126791_967_132-belles-maisons-modernes-belles-photos.jpg" class="d-block w-100" style="height: 600px;"alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://luxury-houses.net/wp-content/uploads/2020/01/7681-Willow-Glen-Rd-Los-Angeles-CA-3.jpg" class="d-block w-100"  style="height: 600px;"alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/c6/48/d3/c648d3b5b4a9fddc1a6091bf7d2685b8.jpg" class="d-block w-100"style="height: 600px;" alt="...">
            </div>
            <!--https://upload.wikimedia.org/wikipedia/commons/8/8d/Yarra_Night_Panorama%2C_Melbourne_-_Feb_2005.jpg-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<div class="col-md-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Health</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Food for Thought: Diet and Brain Health</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 11</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="https://exterieur.housekeeping.tn/wp-content/uploads/2020/01/1580126791_967_132-belles-maisons-modernes-belles-photos.jpg" style="width: 200px; height: 250px;">
         </div>
      </div>
   </div>
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
              
              <p class="card-text"id="categorie">{{ $bien->categorie }}</p>
              <p class="card-text"id="nom">{{ $bien->nom}}</p>
              <p class="card-text" id="prix">prix: {{ $bien->prix}} FCFA</p>
              <p>  <i class="fa-solid fa-location-dot" style="color: gray;">  {{ $bien->localisation}}</i></p>
              <hr>
              <div class="date">
              <p id="date"> <i class="fa-solid fa-clock" style="color: #1a55e3;"> </i>{{ $bien->created_at}}</p>
              <a href="{{ route('detail', $bien->id) }}">
                  <button type="button" class="btn btn-sm btn-outline-secondary">     <i class="fa-solid fa-eye" style="color: #1a55e3;"></i></button>
                  </a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
              
            
                <div class="btn-group">
               
              
                </div>
            
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
