<div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom bg-light">

    <div class="d-flex gap-3 small">
        <span>📞 <a href="https://wa.me/212694520405" class="text-dark text-decoration-none">+212 694 520 405</a></span>
        <span>📧 <a href="mailto:agence.yanatravel@gmail.com" class="text-dark text-decoration-none">agence.yanatravel@gmail.com</a></span>
    </div>

    <div>
        @auth
            <span class="me-3">👋 {{ Auth::user()->prenomClient }}</span>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger">🚪 Déconnexion</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-dark btn-sm rounded-pill px-3 me-2">🔑 Connexion</a>
            <a href="{{ route('register') }}" class="btn btn-outline-dark btn-sm rounded-pill px-3">📝 Inscription</a>
        @endauth
    </div>

</div>