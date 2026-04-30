@extends('layouts.master')

@section('title', 'Qui sommes-nous - Yana Travel')

@section('content')
<style>
    .about-hero {
        background: linear-gradient(135deg, #0b2b44 0%, #134b6b 100%);
        color: white;
        padding: 80px 0 60px;
        text-align: center;
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        margin-bottom: 50px;
    }
    .about-hero h1 {
        font-size: 3rem;
        font-weight: 800;
    }
    .mission-card {
        background: white;
        border-radius: 30px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        transition: all 0.3s;
        height: 100%;
    }
    .mission-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 40px rgba(0,0,0,0.1);
    }
    .mission-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #ff9a3c, #ff5e00);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
    .mission-icon i {
        font-size: 35px;
        color: white;
    }
    .mission-card h4 {
        font-weight: 700;
        margin-bottom: 15px;
        color: #0b2b44;
    }
    .values-list {
        list-style: none;
        padding: 0;
    }
    .values-list li {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    .values-list li i {
        color: #ff7b00;
        font-size: 20px;
        margin-right: 12px;
    }
    .team-card {
        text-align: center;
        padding: 20px;
        border-radius: 20px;
        transition: all 0.3s;
    }
    .team-card:hover {
        background: white;
        box-shadow: 0 15px 30px rgba(0,0,0,0.08);
        transform: translateY(-5px);
    }
    .team-img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        border: 3px solid #ff7b00;
    }
    .testimonial-card {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        text-align: center;
    }
    .testimonial-card i {
        font-size: 40px;
        color: #ff7b00;
        opacity: 0.5;
        margin-bottom: 15px;
    }
    .stats-about {
        background: linear-gradient(115deg, #0b2b44, #134b6b);
        color: white;
        padding: 60px 0;
        margin: 50px 0;
    }
</style>

<div class="about-hero" data-aos="fade-down">
    <div class="container">
        <h1>✨ Qui sommes-nous ?</h1>
        <p class="lead">Votre agence de voyage de confiance depuis 2018</p>
    </div>
</div>

<div class="container">
    <div class="row align-items-center mb-5" data-aos="fade-right">
        <div class="col-lg-6">
            <h2 class="section-title text-start" style="text-align: left !important;">
                <span style="color: #ff7b00;">Notre</span> Histoire
            </h2>
            <p class="lead fw-semibold">Née d'une passion : le voyage et le partage.</p>
            <p>Yana Travel a été fondée à Fès par une équipe de passionnés de voyages, avec une conviction forte : <strong>rendre chaque déplacement unique et accessible à tous</strong>. Depuis 2018, nous accompagnons des milliers de voyageurs à travers le Maroc et le monde.</p>
            <p>Notre agence allie expertise locale, conseils personnalisés et tarifs compétitifs pour vous offrir des séjours sur mesure. Que vous soyez amateur de culture, d’aventure ou de détente, Yana Travel transforme vos envies en réalité.</p>
        </div>
        <div class="col-lg-6 text-center" data-aos="flip-left">
            <img src="/images/travel.jpg" class="img-fluid rounded-4 shadow-lg" alt="Notre histoire" style="max-height: 350px; object-fit: cover;">
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-md-4" data-aos="zoom-in">
            <div class="mission-card">
                <div class="mission-icon"><i class="fas fa-bullseye"></i></div>
                <h4>Notre Mission</h4>
                <p class="text-muted">Offrir des voyages authentiques, sécurisés et responsables en privilégiant la qualité et la satisfaction client.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="mission-card">
                <div class="mission-icon"><i class="fas fa-eye"></i></div>
                <h4>Notre Vision</h4>
                <p class="text-muted">Devenir la référence du voyage personnalisé au Maroc, et faire rayonner notre savoir-faire à l'international.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="mission-card">
                <div class="mission-icon"><i class="fas fa-heart"></i></div>
                <h4>Nos Valeurs</h4>
                <ul class="values-list text-start">
                    <li><i class="fas fa-check-circle"></i> Écoute & Transparence</li>
                    <li><i class="fas fa-check-circle"></i> Engagement & Proximité</li>
                    <li><i class="fas fa-check-circle"></i> Passion & Authenticité</li>
                    <li><i class="fas fa-check-circle"></i> Respect de l'environnement</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="stats-about text-center">
    <div class="container">
        <h2 class="text-white mb-5" data-aos="fade-up">📊 Chiffres clés</h2>
        <div class="row g-4">
            <div class="col-md-3" data-aos="fade-up">
                <div class="stat-number fs-1 fw-bold text-warning" style="font-size: 3rem !important;"><span class="count-up" data-count="1800">0</span>+</div>
                <p class="mb-0">Clients satisfaits</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-number fs-1 fw-bold text-warning" style="font-size: 3rem !important;"><span class="count-up" data-count="52">0</span>+</div>
                <p class="mb-0">Destinations</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-number fs-1 fw-bold text-warning" style="font-size: 3rem !important;"><span class="count-up" data-count="8">0</span> ans</div>
                <p class="mb-0">d'expérience</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-number fs-1 fw-bold text-warning" style="font-size: 3rem !important;"><span class="count-up" data-count="120">0</span>+</div>
                <p class="mb-0">Voyages/an</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
   
    <h2 class="section-title" data-aos="fade-right">🌟 Pourquoi choisir Yana Travel ?</h2>
    <div class="row g-4 mb-5">
        <div class="col-md-4" data-aos="flip-up">
            <div class="mission-card" style="padding: 25px;">
                <i class="fas fa-user-tie fa-3x" style="color: #ff7b00; margin-bottom: 15px;"></i>
                <h5>Expertise locale</h5>
                <p class="text-muted small">Une équipe basée à Fès, connaisseuse du territoire marocain.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="flip-up" data-aos-delay="100">
            <div class="mission-card" style="padding: 25px;">
                <i class="fas fa-tags fa-3x" style="color: #ff7b00; margin-bottom: 15px;"></i>
                <h5>Sans commission cachée</h5>
                <p class="text-muted small">Transparence totale sur les prix et prestations.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="flip-up" data-aos-delay="200">
            <div class="mission-card" style="padding: 25px;">
                <i class="fas fa-headset fa-3x" style="color: #ff7b00; margin-bottom: 15px;"></i>
                <h5>Support 7j/7</h5>
                <p class="text-muted small">Nous restons à votre écoute avant, pendant et après le voyage.</p>
            </div>
        </div>
    </div>

    <h2 class="section-title" data-aos="fade-left">💬 Ce qu'ils disent de nous</h2>
    <div class="row g-4 mb-5">
        <div class="col-md-4" data-aos="fade-up">
            <div class="testimonial-card">
                <i class="fas fa-quote-right"></i>
                <p>Un service exceptionnel ! Yana Travel a organisé notre voyage de A à Z, tout était parfait. Je recommande vivement.</p>
                <h6 class="mt-3">📌 Nadia K.</h6>
                <div class="text-warning">★★★★★</div>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-card">
                <i class="fas fa-quote-right"></i>
                <p>Excellente agence. Disponibilité, conseils avisés et tarifs imbattables. Merci pour cette belle expérience au Maroc !</p>
                <h6 class="mt-3">📌 Mehdi R.</h6>
                <div class="text-warning">★★★★★</div>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-card">
                <i class="fas fa-quote-right"></i>
                <p>Ils m'ont accompagné pour mon voyage en Turquie, tout était fluide et bien organisé. Je les recontacterai sans hésiter.</p>
                <h6 class="mt-3">📌 Sofia L.</h6>
                <div class="text-warning">★★★★★</div>
            </div>
        </div>
    </div>
</div>

<script>
    const aboutCounters = document.querySelectorAll('.stats-about .count-up');
    const aboutObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute('data-count');
                let count = 0;
                const increment = target / 80;
                const update = () => {
                    count += increment;
                    if(count < target) {
                        counter.innerText = Math.ceil(count);
                        requestAnimationFrame(update);
                    } else {
                        counter.innerText = target;
                    }
                };
                update();
                aboutObserver.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });
    aboutCounters.forEach(c => aboutObserver.observe(c));
</script>
@endsection