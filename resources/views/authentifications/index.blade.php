<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Créer un compte</h2>
  <form action="{{Route('User.creerCompte')}}" method="post" >
  @method('POST')
  @csrf
  <div class="row">
    <div class="col">
        <label for="nom">Nom:</label>
      <input type="text" class="form-control"  name="nom" value="{{old('nom')}}">
      @error('nom')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="col">
        <label for="prenom">Prenom:</label>
      <input type="text" class="form-control" value="{{old('prenom')}}"  name="prenom" >
      @error('prenom')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    </div>
  </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
      @error('email')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    </div>
    <div class="mb-3">
      <label for="pwd">Mot de passe:</label>
      <input type="password" class="form-control" id="pwd"  name="password" value="{{old('password')}}">
      @error('password')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    </div>
    <div class="col">
        <label for="nom">Numéro téléphone</label>
      <input type="number" class="form-control"  name="telephone" >
     
    </div>
     @error('telephone')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">s'inscrire</button>
  </form>
</div>

</body>
</html>