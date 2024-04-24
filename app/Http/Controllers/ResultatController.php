<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resultat;
use App\Models\Student;
use App\Models\Resource;

class ResultatController extends Controller
{
  public function index()
  {
      $resultats = Resultat::all();
      return view('admin.results.index', compact('resultats'));
  }

  public function create()
  {
    $students = Student::all(); // Supposons que vous récupériez tous les étudiants
    return view('admin.results.create', compact('students'));
  }

  public function store(Request $request)
  {
      // Validation des données
      $request->validate([
          'student_id' => 'required',
          'matiere' => 'required|string',
          'note' => 'required|numeric',
      ]);
      $resource = Resource::create([]);
      Resultat::create([
          'student_id' => $request->student_id,
          'matiere' => $request->matiere,
          'note' => $request->note,
          'resource_id' => $resource->id, // Ajout de l'ID de la ressource
      ]);


      // Redirection avec un message de succès
      return redirect()->route('resultats.index')->with('success', 'Résultat ajouté avec succès!');
  }

  public function show(Resultat $resultat)
  {
      // Affichage d'un résultat spécifique (si nécessaire)
  }

  public function edit(Resultat $resultat)
  {
    $students = Student::all();
    return view('admin.results.edit', compact('resultat', 'students'));
  }

  public function update(Request $request, Resultat $resultat)
  {
      // Validation des données
      $request->validate([
          'student_id' => 'required',
          'matiere' => 'required|string',
          'note' => 'required|numeric',
      ]);

      // Mise à jour du résultat
      $resultat->update($request->all());

      // Redirection avec un message de succès
      return redirect()->route('resultats.index')->with('success', 'Résultat mis à jour avec succès!');
  }

  public function destroy(Resultat $resultat)
  {
      // Suppression du résultat
      $resultat->resource->delete();
      $resultat->delete();

      // Redirection avec un message de succès
      return redirect()->route('resultats.index')->with('success', 'Résultat supprimé avec succès!');
  }
}
