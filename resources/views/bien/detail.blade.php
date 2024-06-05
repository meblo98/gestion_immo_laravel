<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>


<div id="main-content" class="blog-page">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 left-box">
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="{{ $biens->url_image }}" alt="">
                            </div>
                            <h3><a href="blog-details.html">{{ $biens->nom }}</a></h3>
                            <p>{{ $biens->description }}</p>
                        </div>                        
                    </div>
                    <div class="card">
                            <div class="header">
                                <h2>commentaires</h2>
                            </div>
                            @foreach ($commentaires as $commentaire )
                            
                          
                            <div class="body">
                                <ul class="comment-reply list-unstyled">
                                    <li class="row clearfix">
                                        <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="data:image/jpeg;base64,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" alt="Awesome Image"></div>
                                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                            <h5 class="m-b-0">{{$commentaire->nom}}</h5>
                                            <p>{{$commentaire->contenu}}</p>
                                            <ul class="list-inline">
                                                <li><a href="javascript:void(0);">{{$commentaire->created_at}}</a></li>
                                            </ul>
                                        </div>
                                    </li>
        
                                </ul>                                        
                            </div>
                            @endforeach
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>Ajouter un commentaire</h2>
                            </div>
                            <div class="body">
                                <div class="comment-form">
                                    <form class="row clearfix"  action=" {{route('commentaire.ajouter')}}" action="post">
                                    @csrf
                                    <input type="hidden" name="bien_id" value="{{$biens->id}}">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="votre nom" name="nom">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..." name="contenu"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                                        </div>                                
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="body search">
                            <div class="input-group m-b-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">                                    
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="header">
                            <h2>les derniers posts</h2>                        
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                              
                              
                             
                                <div class="col-lg-12">
                              
                                    <div class="single_post">
                                      @foreach ( $posts as $bien)
                                      
                                   
                                        <p class="m-b-0">{{$bien->nom}}</p>
                                        <span>{{$bien->created_at}}</span>
                                        <div class="img-post">
                                            <img src="{{($bien->url_image)}}" alt="Awesome Image">                                        
                                        </div>  
                                        @endforeach                                     
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>

        </div>
    </div>
    <style>
      body{
    background-color: #f4f7f6;
    margin-top:20px;
}
.card {
    background: #fff;
    transition: .5s;
    border: 0;
    margin-bottom: 30px;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}
.card .body {
    color: #444;
    padding: 20px;
    font-weight: 400;
}
.card .header {
    color: #444;
    padding: 20px;
    position: relative;
    box-shadow: none;
}
.single_post {
    -webkit-transition: all .4s ease;
    transition: all .4s ease
}

.single_post .body {
    padding: 30px
}

.single_post .img-post {
    position: relative;
    overflow: hidden;
    max-height: 500px;
    margin-bottom: 30px
}

.single_post .img-post>img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    -webkit-transition: -webkit-transform .4s ease, opacity .4s ease;
    transition: transform .4s ease, opacity .4s ease;
    max-width: 100%;
    filter: none;
    -webkit-filter: grayscale(0);
    -webkit-transform: scale(1.01)
}

.single_post .img-post:hover img {
    -webkit-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02);
    opacity: .7;
    filter: gray;
    -webkit-filter: grayscale(1);
    -webkit-transition: all .8s ease-in-out
}

.single_post .img-post:hover .social_share {
    display: block
}

.single_post .footer {
    padding: 0 30px 30px 30px
}

.single_post .footer .actions {
    display: inline-block
}

.single_post .footer .stats {
    cursor: default;
    list-style: none;
    padding: 0;
    display: inline-block;
    float: right;
    margin: 0;
    line-height: 35px
}

.single_post .footer .stats li {
    border-left: solid 1px rgba(160, 160, 160, 0.3);
    display: inline-block;
    font-weight: 400;
    letter-spacing: 0.25em;
    line-height: 1;
    margin: 0 0 0 2em;
    padding: 0 0 0 2em;
    text-transform: uppercase;
    font-size: 13px
}

.single_post .footer .stats li a {
    color: #777
}

.single_post .footer .stats li:first-child {
    border-left: 0;
    margin-left: 0;
    padding-left: 0
}

.single_post h3 {
    font-size: 20px;
    text-transform: uppercase
}

.single_post h3 a {
    color: #242424;
    text-decoration: none
}

.single_post p {
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    margin: 0
}

.single_post .blockquote p {
    margin-top: 0 !important
}

.single_post .meta {
    list-style: none;
    padding: 0;
    margin: 0
}

.single_post .meta li {
    display: inline-block;
    margin-right: 15px
}

.single_post .meta li a {
    font-style: italic;
    color: #959595;
    text-decoration: none;
    font-size: 12px
}

.single_post .meta li a i {
    margin-right: 6px;
    font-size: 12px
}

.single_post2 {
    overflow: hidden
}

.single_post2 .content {
    margin-top: 15px;
    margin-bottom: 15px;
    padding-left: 80px;
    position: relative
}

.single_post2 .content .actions_sidebar {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 60px
}

.single_post2 .content .actions_sidebar a {
    display: inline-block;
    width: 100%;
    height: 60px;
    line-height: 60px;
    margin-right: 0;
    text-align: center;
    border-right: 1px solid #e4eaec
}

.single_post2 .content .title {
    font-weight: 100
}

.single_post2 .content .text {
    font-size: 15px
}

.right-box .categories-clouds li {
    display: inline-block;
    margin-bottom: 5px
}

.right-box .categories-clouds li a {
    display: block;
    border: 1px solid;
    padding: 6px 10px;
    border-radius: 3px
}

.right-box .instagram-plugin {
    overflow: hidden
}

.right-box .instagram-plugin li {
    float: left;
    overflow: hidden;
    border: 1px solid #fff
}

.comment-reply li {
    margin-bottom: 15px
}

.comment-reply li:last-child {
    margin-bottom: none
}

.comment-reply li h5 {
    font-size: 18px
}

.comment-reply li p {
    margin-bottom: 0px;
    font-size: 15px;
    color: #777
}

.comment-reply .list-inline li {
    display: inline-block;
    margin: 0;
    padding-right: 20px
}

.comment-reply .list-inline li a {
    font-size: 13px
}

@media (max-width: 640px) {
    .blog-page .left-box .single-comment-box>ul>li {
        padding: 25px 0
    }
    .blog-page .left-box .single-comment-box ul li .icon-box {
        display: inline-block
    }
    .blog-page .left-box .single-comment-box ul li .text-box {
        display: block;
        padding-left: 0;
        margin-top: 10px
    }
    .blog-page .single_post .footer .stats {
        float: none;
        margin-top: 10px
    }
    .blog-page .single_post .body,
    .blog-page .single_post .footer {
        padding: 30px
    }
}
    </style>
</body>
</html>
