<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plus Admin</title>
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>
<body>
<div class="container mt-3">
  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <h1>Connexion</h1>
                        </div>
                        <h4>Bonjour ! Commençons par le début</h4>
                        <h6 class="fw-light">S'identifier pour continuer.</h6>
  <form class="pt-3" action="{{Route('User.seconnexion')}}" Method="post">
  @csrf
  <div class="form-group">
    <input type="email" id="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Votre email svp">
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Entrer votre mot de passe">
    @error('password')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
    <div class="mt-3 d-grid gap-2">
        <button type="submit" class="btn btn-block btn-primary btn-lg fw-semibold auth-form-btn">se connecter</button>
    </div>
    <div class="text-center mt-4 fw-light"> Vous n'avez pas de compte ? <a href="{{route('User.creerCompte')}}" class="text-primary">Créer</a>
    </div>
  </form>
</div>

</body>
</html>
