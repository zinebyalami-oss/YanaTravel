<div class="topbar py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <span><i class="fas fa-phone-alt me-2"></i> <a href="tel:+212694520405">+212 694 520 405</a></span>
                <span class="ms-4"><i class="fas fa-envelope me-2"></i> <a href="mailto:agence.yanatravel@gmail.com">agence.yanatravel@gmail.com</a></span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                @auth
                    <span><i class="fas fa-user me-2"></i> {{ Auth::user()->prenomClient }} {{ Auth::user()->nomClient }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline ms-3">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-light">Déconnexion</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="me-3"><i class="fas fa-sign-in-alt me-1"></i> Connexion</a>
                    <a href="{{ route('register') }}" class="btn btn-sm btn-primary">Inscription</a>
                @endauth
            </div>
        </div>
    </div>
</div>