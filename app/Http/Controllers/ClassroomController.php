<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $classrooms = Classroom::paginate(10);
      return view('admin.classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.classrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
      'name' => 'required|string|max:255',
      'capacity' => 'required|integer|min:1',
      ]);

      // Créer une nouvelle classe
      $classroom = Classroom::create([
          'name' => $request->input('name'),
          'capacity' => $request->input('capacity'),
      ]);

      return redirect()->route('classrooms.index')->with('success', 'Nouvelle classe ajoutée avec succès!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $classroom = Classroom::findOrFail($id);
      return view('admin.classrooms.edit', compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $request->validate([
          'name' => 'required|string|max:255',
          // Ajoutez d'autres règles de validation si nécessaire
      ]);

      $classroom = Classroom::findOrFail($id);
      $classroom->update($request->all());

      return redirect()->route('classrooms.index')->with('success', 'Salle de classe mise à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $classroom = Classroom::findOrFail($id);
      $classroom->delete();

      return redirect()->route('classrooms.index')->with('success', 'Salle de classe supprimée avec succès!');
    }
}
