@extends('layouts.master')

@section('title', 'Contact - Yana Travel')

@section('content')
<style>
    .contact-header {
        background: linear-gradient(135deg, #0b2b44 0%, #134b6b 100%);
        color: white;
        padding: 80px 0 60px;
        text-align: center;
        margin-bottom: 50px;
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
    }
    .contact-header h1 {
        font-size: 3rem;
        font-weight: 800;
    }
    .contact-card {
        background: white;
        border-radius: 30px;
        padding: 30px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        height: 100%;
        border: none;
    }
    .contact-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 45px rgba(0,0,0,0.12);
    }
    .contact-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #ff9a3c, #ff5e00);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    .contact-icon i {
        font-size: 30px;
        color: white;
    }
    .contact-card h4 {
        font-weight: 700;
        margin-bottom: 15px;
        color: #0b2b44;
    }
    .form-control {
        padding: 12px 20px;
        border-radius: 50px;
        border: 1px solid #e0e0e0;
        transition: all 0.3s;
    }
    .form-control:focus {
        border-color: #ff7b00;
        box-shadow: 0 0 0 3px rgba(255,123,0,0.1);
    }
    textarea.form-control {
        border-radius: 20px;
    }
    .btn-submit {
        background: linear-gradient(90deg, #ff9a3c, #ff5e00);
        color: white;
        border: none;
        padding: 14px 35px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.4s;
        width: 100%;
    }
    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(255,94,0,0.3);
    }
    .map-container {
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        margin-top: 40px;
    }
    .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .info-icon {
        width: 45px;
        height: 45px;
        background: #f0f0f0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        color: #ff7b00;
        font-size: 20px;
    }
    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        background: #0b2b44;
        color: white;
        border-radius: 50%;
        margin-right: 10px;
        transition: all 0.3s;
    }
    .social-links a:hover {
        background: #ff7b00;
        transform: translateY(-3px);
    }
</style>

<div class="contact-header" data-aos="fade-down">
    <div class="container">
        <h1>📩 Contactez-nous</h1>
        <p class="lead">Nous sommes à votre écoute pour réaliser votre voyage de rêve</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4">
  
        <div class="col-lg-5" data-aos="fade-right">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h4>📍 Notre adresse</h4>
                <p class="text-muted">
                    BUREAU YASSINE N 83 AV MLY RACHID<br>
                    AL ATLAS 1ER ETAGE N 2 - Fès, Maroc
                </p>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <strong>Téléphone</strong><br>
                        <a href="tel:+212694520405" style="color: #ff7b00; text-decoration: none;">+212 694 520 405</a>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fab fa-whatsapp"></i></div>
                    <div>
                        <strong>WhatsApp</strong><br>
                        <a href="https://wa.me/212694520405" target="_blank" style="color: #ff7b00; text-decoration: none;">+212 694 520 405</a>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <strong>Email</strong><br>
                        <a href="mailto:agence.yanatravel@gmail.com" style="color: #ff7b00; text-decoration: none;">agence.yanatravel@gmail.com</a>
                    </div>
                </div>

                <hr class="my-4">
                <h5 class="mb-3">📱 Suivez-nous</h5>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-7" data-aos="fade-left">
            <div class="contact-card">
                <div class="contact-icon" style="background: linear-gradient(135deg, #0b2b44, #134b6b);">
                    <i class="fas fa-paper-plane"></i>
                </div>
                <h4>✍️ Envoyez-nous un message</h4>

                @if(session('success'))
                    <div class="alert alert-success rounded-pill">
                        <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('demande.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nom complet</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="fas fa-user"></i></span>
                            <input type="text" name="nomComplet" class="form-control" placeholder="Votre nom et prénom" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">📅 Nombre de places</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="fas fa-users"></i></span>
                            <input type="number" name="nombre_places" class="form-control" min="1" value="1" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">🌍 Choisissez votre voyage</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="fas fa-globe"></i></span>
                            <select name="voyage_id" class="form-control" required>
                                <option value="">-- Sélectionnez une destination --</option>
                                @foreach($voyages as $voyage)
                                    <option value="{{ $voyage->id }}">{{ $voyage->destination }} - {{ number_format($voyage->prix, 0, ',', ' ') }} DH</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">💬 Message</label>
                        <textarea name="message" class="form-control" rows="5" placeholder="Votre demande, questions, suggestions..." required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane me-2"></i> Envoyer la demande
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="map-container" data-aos="zoom-in-up" data-aos-delay="100">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.454105648483!2d-4.987480684788129!3d34.01776928061702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8b6a1c2b0d3b%3A0x8e2f9c1e5b6c7d8a!2sBUREAU%20YASSINE%20N%2083%20AV%20MLY%20RACHID!5e0!3m2!1sfr!2sma!4v1690000000000!5m2!1sfr!2sma" 
            width="100%" 
            height="350" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</div>
@endsection