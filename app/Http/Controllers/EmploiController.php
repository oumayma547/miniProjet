<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emploi;
use App\Models\Resource;

class EmploiController extends Controller
{
  public function index()
  {
      $emplois = Emploi::all();
      
      return view('admin.emploies.index', compact('emplois'));
  }

  public function create()
  {
     return redirect()->route('emplois.store');
  }

  public function store(Request $request)
  {
      $request->validate([
          // Valider les champs du formulaire
      ]);

      $resource = Resource::create([
      ]);

      Emploi::create([
          'resource_id' => $resource->id,
      ]);

      return redirect()->route('emplois.index')->with('success', 'Emploi du temps créé avec succès!');
  }

  public function show(Emploi $emploi)
  {
      return view('admin.emploies.show', compact('emploi'));
  }

  public function edit(Emploi $emploi)
  {
      return view('emplois.edit', compact('emploi'));
  }

  public function update(Request $request, Emploi $emploi)
  {
      $request->validate([
          // Valider les champs du formulaire
      ]);

      $emploi->update($request->all());

      return redirect()->route('emplois.index')->with('success', 'Emploi du temps mis à jour avec succès!');
  }

  public function destroy(Emploi $emploi)
  {
      $emploi->delete();

      return redirect()->route('emplois.index')->with('success', 'Emploi du temps supprimé avec succès!');
  }
}
