@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">
        🌍 
        @php
            $titles = [
                1 => 'Voyages Nationaux',
                2 => 'Voyages Internationaux',
                3 => 'Omra'
            ];
        @endphp
        {{ $titles[$type] ?? 'Nos voyages' }}
    </h2>

    <div class="row">
        @forelse($voyages as $voyage)
            <div class="col-md-4 mb-3">
                <div class="card shadow h-100">
                    <img src="/images/{{ $voyage->image }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center">
                        <h5>{{ $voyage->destination }}</h5>
                        <p class="text-primary fw-bold">{{ number_format($voyage->prix, 0, ',', ' ') }} DH</p>
                        <p class="text-muted small">Durée : {{ $voyage->duree }} jours</p>
                        <a href="{{ url('/voyages/'.$voyage->id) }}" class="btn btn-dark btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Aucun voyage trouvé !</p>
        @endforelse
    </div>
</div>
@endsection