@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="alert alert-success">
        ✅ Bienvenue dans le Dashboard Admin, {{ Auth::user()->prenomClient }} !
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Voyages</h5>
                    <p class="card-text">Gérer les voyages</p>
                    <a href="#" class="btn btn-light">Accéder</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Demandes</h5>
                    <p class="card-text">Gérer les demandes clients</p>
                    <a href="#" class="btn btn-light">Accéder</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection