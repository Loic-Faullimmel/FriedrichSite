@extends('layouts.template')

@section('title')
    testlayout
@endsection
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tarte Flambée Friedrich</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Prata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="icon" type="image/jpg" href="{{asset('/img/Flogo.jpg')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href='css/Template.css'>
    <link rel="stylesheet" href='css/Produits.css'>

</head>
@section('header')
    <header>
        <div class="title">
            <a href="{{ url('/') }}" class="navbar-brand"><img src="img/Flogo.gif" ></a>
            <div style="margin-left:40%;">Entreprise</div>
        </div>
        <div class="top-right links">
            <a href="/produits">Nos Produits</a>
            <a href="/contact">Nous contacter</a>
        </div>
    </header>
@endsection
@section('content')
    <div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="container">
                <div id="categories-list" class="row list-group" >
                    <div class="well well-sm"style="margin-bottom: 0; background: black;">
                        <strong style="font-size: 30px">Filtrer :   </strong>
                        <button onclick="myFunction()">Click me</button>
                        <div class="btn-group" style="margin-top: 10px">
                            <a href="#" id="Tartesucre" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-plus">
                                </span>Tartes sucrées</a>
                            <a href="#" id="Tartesel" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-plus"></span>Tartes Salées</a>
                            <a href="#" id="bio" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-plus">
                                </span>Tartes Bio</a>
                            <a href="#" id="autre" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-plus">
                                </span>Autre Produits</a>
                        </div>
                    </div>

                    @foreach($produits as $produit)
                        <div class="item  col-xs-4 col-lg-4" style=" background: white">
                            <div class="thumbnail">
                                <h4 style="font-family: 'Prata',sans-serif;font-size: 30px;color: darkred;"> {{$produit->titre}}</h4>
                                <img class="group list-group-image" src="{{asset($produit->link_img)}}" alt="image tarte" style="box-shadow:8px 8px 12px black;max-height:250px;max-width:250px;" />
                                <div class="caption">
                                <!------<p class="group inner list-group-item-text">
                                {{$produit->description}} </p> ---------->
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6" style="background: url('http://127.0.0.1:8000/img/tableau-noir.jpg');background-size:cover;width: 100%;border:darkgreen solid 5px;box-shadow:8px 8px 12px black;max-height:200px">
                                            <p class="lead" style="font-family: 'Caveat', serif;font-size: 25px;color:white;margin-top: 2%;">
                                                {{$produit->description}}</p>
                                        </div>
                                        <div class="col-xs-12 col-md-12" style="margin-top: 2%">
                                            <button type="submit"  class="button"><span><a href="/Tartes/{{ $produit->id }}">Voir plus</a></span></button>
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
@endsection
@section('scripts')
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
