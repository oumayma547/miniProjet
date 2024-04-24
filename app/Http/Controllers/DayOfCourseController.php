<?php

namespace App\Http\Controllers;

use App\Models\DaysOfCourse;
use Illuminate\Http\Request;

class DayOfCourseController extends Controller
{
    // Afficher tous les jours de cours
    public function index()
    {
        $days = DaysOfCourse::all();
        return view('admin.days.index', compact('days'));
    }

    // Afficher le formulaire de création d'un jour de cours
    public function create($emploieId)
    {
        return view('admin.days.create', compact('emploieId'));
    }

    // Stocker un nouveau jour de cours
    public function store(Request $request)
    {
      //die(var_dump($request->input('emploi_id')));
        $request->validate([
        ]);

        $dayOfCourse = new DaysOfCourse();
        $dayOfCourse->date = $request->input('day');
        $dayOfCourse->emploi_id = $request->input('emploi_id');
        $dayOfCourse->save();
        $dayId = $dayOfCourse->id;

        return redirect()->route('seances.create', ['dayId' => $dayId]);
    }

    // Afficher les détails d'un jour de cours
    public function show(DaysOfCourse $day)
    {
        return view('admin.days.show', compact('day'));
    }

    // Afficher le formulaire de modification d'un jour de cours
    public function edit(DaysOfCourse $day)
    {
        return view('admin.days.edit', compact('day'));
    }

    // Mettre à jour un jour de cours
    public function update(Request $request, DaysOfCourse $day)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $day->update($request->all());

        return redirect()->route('days.index')->with('success', 'Jour de cours mis à jour avec succès!');
    }

    // Supprimer un jour de cours
    public function destroy(DaysOfCourse $day)
    {
        $day->delete();

        return redirect()->route('days.index')->with('success', 'Jour de cours supprimé avec succès!');
    }
}
