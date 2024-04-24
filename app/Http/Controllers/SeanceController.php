<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seance;
use App\Models\Teacher;
use App\Models\Classroom;

class SeanceController extends Controller
{
  public function index()
  {
      $seances = Seance::with(['teacher', 'classe'])->get();
      return view('admin.seances.index', compact('seances'));
  }

  public function create($dayId)
  {
    $teachers = Teacher::all();
    $classes = Classroom::all();
    return view('admin.seances.create', compact('teachers', 'classes', 'dayId'));
  }

  public function store(Request $request)
  {
      $request->validate([
          'heure_debut' => 'required|date_format:H:i',
          'heure_fin' => 'required|date_format:H:i|after:heure_debut',
          'teacher_id' => 'required|exists:teachers,id',
          'classroom_id' => 'required|exists:classrooms,id',
          'matiere' => 'required|string|max:255',

      ]);

      Seance::create([
          'heure_debut' => $request->input('heure_debut'),
          'heure_fin' => $request->input('heure_fin'),
          'teacher_id' => $request->input('teacher_id'),
          'classroom_id' => $request->input('classroom_id'),
          'matiere' => $request->input('matiere'),
          'days_of_course_id' => $request->input('day_of_course_id'),
      ]);
      return redirect()->route('seances.create', ['dayId' => $request->input('day_of_course_id')])->with('success', 'Séance de cours ajoutée avec succès!');
  }

  public function edit(Seance $seance)
  {
    $teachers = Teacher::all();
    $classrooms = Classroom::all();
    return view('admin.seances.edit', compact('seance', 'teachers', 'classrooms'));
  }

  public function update(Request $request, Seance $seance)
  {
      $request->validate([
          'heure_debut' => 'required|date_format:H:i',
          'heure_fin' => 'required|date_format:H:i|after:heure_debut',
          'teacher_id' => 'required|exists:teachers,id',
          'classe_id' => 'required|exists:classrooms,id',
          'matiere' => 'required|string|max:255',
      ]);

      $seance->update($request->all());

      return redirect()->route('seances.index')->with('success', 'Séance de cours mise à jour avec succès!');
  }

  public function destroy(Seance $seance)
  {
      $seance->delete();

      return redirect()->route('seances.index')->with('success', 'Séance de cours supprimée avec succès!');
  }
}
