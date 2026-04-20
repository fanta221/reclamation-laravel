<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;

class ReclamationController extends Controller
{
    // 📄 Afficher toutes les réclamations
    public function index()
    {
        $reclamations = Reclamation::all();
        return view('reclamations.index', compact('reclamations'));
    }

    // ➕ Enregistrer une réclamation
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'matiere' => 'required',
            'message' => 'required',
        ]);

        Reclamation::create([
            'etudiant_nom' => $request->nom,
            'matiere' => $request->matiere,
            'message' => $request->message,
            'statut' => 'en attente'
        ]);

        return back()->with('success', 'Réclamation envoyée avec succès');
    }

    // ✔ Valider une réclamation
    public function valider($id)
    {
        $reclamation = Reclamation::find($id);

        if ($reclamation) {
            $reclamation->statut = "validée";
            $reclamation->save();
        }

        return back()->with('success', 'Réclamation validée');
    }

    // ✖ Rejeter une réclamation
    public function rejeter($id)
    {
        $reclamation = Reclamation::find($id);

        if ($reclamation) {
            $reclamation->statut = "rejetée";
            $reclamation->save();
        }

        return back()->with('success', 'Réclamation rejetée');
    }

    // 📊 Dashboard admin
    public function admin()
    {
        return view('admin', [
            'total' => Reclamation::count(),
            'en_attente' => Reclamation::where('statut', 'en attente')->count(),
            'validees' => Reclamation::where('statut', 'validée')->count(),
            'rejetees' => Reclamation::where('statut', 'rejetée')->count(),
        ]);
    }
}