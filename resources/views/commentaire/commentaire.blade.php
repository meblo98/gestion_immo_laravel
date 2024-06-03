<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
        @foreach ($commentaires as $commentaire)
            <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2">
                    
                    
                    
                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BB1m5xx4.img?w=1920&h=1080&q=60&m=2&f=jpg" width="40">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">{{$commentaire->nom}}</span><span class="date text-black-50">publier le - {{$commentaire->created_at	}}</span></div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text">{{$commentaire->contenu}}</p>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="d-flex flex-row fs-12">
                        <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Commentaire</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">partager</span></div>
                    </div>
                    <hr>
                </div>
                @endforeach
                <div class="bg-light p-2">
                <form action="{{route('commentaire.ajouter')}}" methode="post">
                @csrf

                <label for="nom" class="mr-sm-2">Prenom et nom:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Enter nom" name="nom" id="nom">
                <input type="number" class="form-control mb-2 mr-sm-2" placeholder="Enter id" name="bien_id" id="bien_id">
                <label for="nom" class="mr-sm-2">ajout le contenu:</label>
                    <textarea class="form-control ml-1 shadow-none textarea" name="contenu"></textarea></div>
                    <div class="mt-2 text-right">
                        <button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    body{background: #eee}.date{font-size: 11px}.comment-text{font-size: 12px}.fs-12{font-size: 12px}.shadow-none{box-shadow: none}.name{color: #007bff}.cursor:hover{color: blue}.cursor{cursor: pointer}.textarea{resize: none}
</style>
</body>
</html>