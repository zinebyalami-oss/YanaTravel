@extends('layouts.master')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">🔐 Connexion</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="emailClient" class="form-control" value="{{ old('emailClient') }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" name="passwordClient" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Se connecter</button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}">Pas encore de compte ? Inscription</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection