<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;
        
        if ($type) {
            $voyages = Voyage::where('type_voyage_id', $type)->get();
        } else {
            $voyages = Voyage::all();
        }
        
        return view('voyages.nosVoyages', compact('voyages', 'type'));
    }

    public function show($id)
    {
        $voyage = Voyage::findOrFail($id);
        return view('voyages.show', compact('voyage'));
    }
}