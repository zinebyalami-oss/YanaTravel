@extends('layouts.master')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">📝 Inscription</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">CIN</label>
                                <input type="text" name="CIN" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom</label>
                                <input type="text" name="nomClient" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Prénom</label>
                                <input type="text" name="prenomClient" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="text" name="telClient" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="emailClient" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mot de passe</label>
                                <input type="password" name="passwordClient" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Confirmer mot de passe</label>
                                <input type="password" name="passwordClient_confirmation" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">S'inscrire</button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}">Déjà inscrit ? Connectez-vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection