<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Department;


class DepartmentController extends Controller
{
  // Afficher la liste des départements
  public function index()
  {
      $departments = Department::all();
      return view('admin.departments.index', compact('departments'));
  }

  // Afficher le formulaire de création d'un département
  public function create()
  {
    $teachers = Teacher::all(); // Récupérez tous les enseignants disponibles
    return view('admin.departments.create', compact('teachers'));
  }

  // Enregistrer un nouveau département
  public function store(Request $request)
  {
      $request->validate([
          'name' => 'required|string|max:255',
      ]);

      $department = new Department();
      $department->name = $request->input('name');
      $department->chef_departement_id = $request->input('department_head_id');
      $department->save();

      return redirect()->route('departments.index')->with('success', 'Département ajouté avec succès!');
  }

  // Afficher le formulaire de modification d'un département
  public function edit(Department $department)
  {
      $teachers = Teacher::all();
      return view('admin.departments.edit', compact('department', 'teachers'));
  }

  // Mettre à jour un département existant
  public function update(Request $request, Department $department)
  {
      $request->validate([
          'name' => 'required|string|max:255',
      ]);

      $department->update($request->all());

      return redirect()->route('departments.index')->with('success', 'Département mis à jour avec succès!');
  }

  // Supprimer un département
  public function destroy(Department $department)
  {
      $department->delete();
      return redirect()->route('departments.index')->with('success', 'Département supprimé avec succès!');
  }
}
