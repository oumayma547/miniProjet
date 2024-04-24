<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Validation\Rule;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $teachers = Teacher::paginate(10);

      // Passer les enseignants à la vue
      return view('admin.teacher.display-teacher', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.new-teacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|email|unique:users,email',
          'date_embauche' => 'required|date',
      ]);

      try {
          // Créer un nouvel utilisateur
          $user = User::create([
              'name' => $request->input('name'),
              'email' => $request->input('email'),
              'password' => bcrypt('password'), // Vous pouvez utiliser une valeur par défaut ou demander un mot de passe à l'utilisateur
          ]);
          // Créer un nouvel enseignant associé à l'utilisateur
          $teacher = Teacher::create([
              'user_id' => $user->id,
              'date_embauche' => $request->input('date_embauche'),
              'created_at' => now(),
              'updated_at' => now(),
          ]);

          return redirect()->route('teachers.create')->with('success', 'Enseignant ajouté avec succès!');
      } catch (\Exception $e) {
          return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'ajout de l\'enseignant.');
      }
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
      $teacher = Teacher::findOrFail($id);
      return view('admin.teacher.edit-teacher', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $teacher = Teacher::findOrFail($id);

      $user = $teacher->user;
      
      $request->validate([
          'name' => 'required|string|max:255',
          'email' => [
              'required',
              'email',
              Rule::unique('users', 'email')->ignore($user->id),
          ],
          'date_embauche' => 'required|date',
      ]);


      $user->update([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
      ]);

      $teacher->update([
          'date_embauche' => $request->input('date_embauche'),
      ]);

      return redirect()->route('teachers.index')->with('success', 'Enseignant mis à jour avec succès!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $teacher = Teacher::findOrFail($id);
      return view('admin.teacher.confirm-delete', compact('teacher'));
    }

    public function delete($id)
    {
        $teacher = Teacher::findOrFail($id);
        $user = $teacher->user;
        $user->delete();
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Enseignant supprimé avec succès!');
    }
}
