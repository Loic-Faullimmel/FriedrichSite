@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de board</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     Vous êtes sur l'interface de modification du site
                    </br>
                        <button><a href="/create">Ajouter un produit</a></button>
                        <button><a href="/edit">Modifier un produit</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
