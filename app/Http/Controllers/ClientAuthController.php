<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientAuthController extends Controller
{
    // Afficher formulaire de connexion
    public function showLogin()
    {
        return view('auth.login');
    }

    // Traiter la connexion (Version corrigée)
    public function login(Request $request)
    {
        $request->validate([
            'emailClient' => 'required|email',
            'passwordClient' => 'required',
        ]);

        // Chercher l'utilisateur par emailClient
        $user = Client::where('emailClient', $request->emailClient)->first();

        // Vérifier si l'utilisateur existe et le mot de passe est correct
        if ($user && Hash::check($request->passwordClient, $user->passwordClient)) {
            Auth::login($user);
            
            // Redirection spéciale pour l'admin (utilisation de 'to' au lieu de 'route')
            if ($user->email === 'agence.yanatravel@gmail.com') {
                return redirect()->to('/admin/dashboard')->with('success', 'Bienvenue Admin !');
            }
            
            // Redirection normale pour les clients
            return redirect()->route('home')->with('success', 'Bienvenue !');
        }

        return back()->withErrors([
            'emailClient' => 'Email ou mot de passe incorrect.',
        ]);
    }

    // Afficher formulaire d'inscription
    public function showRegister()
    {
        return view('auth.register');
    }

    // Traiter l'inscription
    public function register(Request $request)
    {
        $data = $request->validate([
            'CIN' => 'required|string|unique:clients',
            'nomClient' => 'required|string|max:255',
            'prenomClient' => 'required|string|max:255',
            'telClient' => 'required|string',
            'emailClient' => 'required|email|unique:clients',
            'passwordClient' => 'required|min:6|confirmed',
        ]);

        $data['passwordClient'] = Hash::make($data['passwordClient']);

        $client = Client::create($data);

        Auth::login($client);

        return redirect()->route('home')->with('success', 'Inscription réussie !');
    }

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}