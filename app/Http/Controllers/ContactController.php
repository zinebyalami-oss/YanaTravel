<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        $voyages = Voyage::all();
        return view('contact', compact('voyages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomComplet' => 'required|string|max:255',
            'nombre_places' => 'required|integer|min:1',
            'voyage_id' => 'required|exists:voyages,id',
            'message' => 'required|string',
        ]);

        // Récupérer le voyage sélectionné
        $voyage = Voyage::find($request->voyage_id);

        Demande::create([
            'dateDemande' => now(),
            'nomComplet' => $request->nomComplet,
            'message' => $request->message,
            'nombre_places' => $request->nombre_places,
            'voyages' => $voyage->destination . ' - ' . $voyage->type->nomType, // Nom du voyage + type
            'client_id' => Auth::check() ? Auth::user()->CIN : null,
            'voyage_id' => $request->voyage_id,
        ]);

        return redirect()->back()->with('success', '✅ Votre demande a été envoyée avec succès ! Nous vous contacterons rapidement.');
    }
}