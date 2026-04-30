@extends('layouts.master')

@section('content')

<div class="hero">
    <div class="overlay"></div>
    <div class="container content">
        <h1 data-aos="fade-up">Voyagez autrement avec <br><span style="color:#ffc107;">Yana Travel</span></h1>
        <p class="lead mt-3" data-aos="fade-up" data-aos-delay="200">Vivez des aventures authentiques au Maroc et à l'international.</p>
        <a href="/nosVoyages" class="btn btn-hero mt-4" data-aos="zoom-in" data-aos-delay="400">Explorer nos voyages <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
</div>

<div class="container mt-5 pt-4">
  
    <h2 class="section-title" data-aos="fade-right">🌍 Voyages Internationaux</h2>
    <div class="row">
        @foreach ($voyages->where('type_voyage_id', 2) as $voyage)
            <div class="col-md-4" data-aos="flip-left" data-aos-delay="100">
                <div class="card card-trip">
                    <img src="/images/{{ $voyage->image }}" alt="{{ $voyage->destination }}">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">{{ $voyage->destination }}</h5>
                        <div class="price-badge my-2">{{ number_format($voyage->prix, 0, ',', ' ') }} DH</div>
                        <p class="text-muted"><i class="fas fa-clock me-1"></i> {{ $voyage->duree }} jours</p>
                        <a href="{{ url('/voyages/'.$voyage->id) }}" class="btn btn-outline-warning rounded-pill px-4">Découvrir <i class="fas fa-chevron-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h2 class="section-title mt-5" data-aos="fade-left">🇲🇦 Voyages Nationaux</h2>
    <div class="row">
        @foreach ($voyages->where('type_voyage_id', 1) as $voyage)
            <div class="col-md-4" data-aos="zoom-in-up">
                <div class="card card-trip">
                    <img src="/images/{{ $voyage->image }}" alt="{{ $voyage->destination }}">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">{{ $voyage->destination }}</h5>
                        <div class="price-badge my-2">{{ number_format($voyage->prix, 0, ',', ' ') }} DH</div>
                        <p class="text-muted"><i class="fas fa-clock me-1"></i> {{ $voyage->duree }} jours</p>
                        <a href="{{ url('/voyages/'.$voyage->id) }}" class="btn btn-outline-warning rounded-pill px-4">Découvrir</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h2 class="section-title mt-5" data-aos="fade-right">🕋 Omra</h2>
    <div class="row">
        @foreach ($voyages->where('type_voyage_id', 3) as $voyage)
            <div class="col-md-4" data-aos="flip-right">
                <div class="card card-trip">
                    <img src="/images/{{ $voyage->image }}" alt="{{ $voyage->destination }}">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">{{ $voyage->destination }}</h5>
                        <div class="price-badge my-2">{{ number_format($voyage->prix, 0, ',', ' ') }} DH</div>
                        <p class="text-muted"><i class="fas fa-clock me-1"></i> {{ $voyage->duree }} jours</p>
                        <a href="{{ url('/voyages/'.$voyage->id) }}" class="btn btn-outline-warning rounded-pill px-4">Découvrir</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="stats-section text-center">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3" data-aos="fade-up">
                <div class="stat-number"><span class="count-up" data-count="1200">0</span>+</div>
                <p>Clients satisfaits</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-number"><span class="count-up" data-count="45">0</span>+</div>
                <p>Destinations</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-number"><span class="count-up" data-count="8">0</span> ans</div>
                <p>Années d'expérience</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-number"><span class="count-up" data-count="150">0</span>+</div>
                <p>Voyages organisés par an</p>
            </div>
        </div>
    </div>
</div>

<script>
  
    const counters = document.querySelectorAll('.count-up');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;
            const increment = target / 100;
            if(count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };
        const observer = new IntersectionObserver((entries) => {
            if(entries[0].isIntersecting) {
                updateCount();
                observer.unobserve(counter);
            }
        }, { threshold: 0.5 });
        observer.observe(counter);
    });
</script>
@endsection