@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <img src="/images/{{ $voyage->image }}" class="card-img-top" style="height: 400px; object-fit: cover;">
                <div class="card-body text-center">
                    <h2 class="mb-3">{{ $voyage->destination }}</h2>
                    <h4 class="text-success mb-3">{{ number_format($voyage->prix, 0, ',', ' ') }} DH</h4>
                    <p><strong>Durée :</strong> {{ $voyage->duree }} jours</p>
                    <p><strong>Description :</strong></p>
                    <p>{{ $voyage->description }}</p>
                    <div class="mt-4">
                        <a href="/contact" class="btn btn-primary">📩 Demander maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection