<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
  public function showSignupForm()
  {
      return view('register-student');
  }
  public function index()
  {
      return view('students.template');
  }
  public function store(Request $request)
  {

    //Log::info('Utilisateur ajouté avec succès.', ['user_id' => $user->id]);
        /*$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);*/

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'student'; // Attribution automatique du rôle "étudiant"

        $user->save();

        return redirect()->route('login')->with('success', 'Utilisateur ajouté avec succès.');
  }


  public function storeStudent(Request $request)
  {

    $request->validate([
            'nom' => 'required|string',
            'date_naissance' => 'required|date',
            'sexe' => 'required|string',
            'nationalite' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'niveau_etudes' => 'required|string',
            'specialisation' => 'required|string',
            'annee_etudes' => 'required|string',
            'statut_inscription' => 'required|string',
        ]);

        $etudiant = new Student();
        $etudiant->nom = $request->nom;
        $etudiant->date_naissance = $request->date_naissance;
        $etudiant->sexe = $request->sexe;
        $etudiant->nationalite = $request->nationalite;
        $etudiant->email = $request->email;
        $etudiant->telephone = $request->telephone;
        $etudiant->niveau_etudes = $request->niveau_etudes;
        $etudiant->specialisation = $request->specialisation;
        $etudiant->annee_etudes = $request->annee_etudes;
        $etudiant->statut_inscription = $request->statut_inscription;
        $etudiant->save();

        return redirect('/admin/index/student/new')->with('success', $request->nom.' ajouté avec succès');
  }


  public function update(Request $request, $id)
  {
      // Valider les données mises à jour
      $request->validate([
          'nom' => 'required|string|max:255',
          'date_naissance' => 'required|date',
          'sexe' => 'required|in:homme,femme',
          'nationalite' => 'required|string|max:255',
          'email' => 'required|email|max:255',
          'telephone' => 'required|string|max:20',
          'niveau_etudes' => 'required|string|max:255',
          'specialisation' => 'required|string|max:255',
          'annee_etudes' => 'required|string|max:255',
          'statut_inscription' => 'required|string|max:255',
      ]);

      // Récupérer l'étudiant à mettre à jour
      $etudiant = Student::findOrFail($id);

      // Mettre à jour l'étudiant avec les données du formulaire
      $etudiant->nom = $request->input('nom');
      $etudiant->date_naissance = $request->input('date_naissance');
      $etudiant->sexe = $request->input('sexe');
      $etudiant->nationalite = $request->input('nationalite');
      $etudiant->email = $request->input('email');
      $etudiant->telephone = $request->input('telephone');
      $etudiant->niveau_etudes = $request->input('niveau_etudes');
      $etudiant->specialisation = $request->input('specialisation');
      $etudiant->annee_etudes = $request->input('annee_etudes');
      $etudiant->statut_inscription = $request->input('statut_inscription');
      // Mettez à jour d'autres attributs de la même manière

      // Enregistrer les modifications
      $etudiant->save();

      // Redirection avec un message flash
      return view('/admin/student/update-student', compact('etudiant'));
  }
  public function edit($id)
    {
        // Récupérer l'étudiant à modifier
        $etudiant = Student::findOrFail($id);

        // Retourner la vue avec les données de l'étudiant
        return view('/admin/student/update-student', compact('etudiant'));
    }

    public function display()
    {
        $students = Student::paginate(1); // Paginate with 10 students per page
        return view('admin.student.display-student', ['students' => $students]);
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        $students = Student::paginate(1); 
        return view('admin.student.display-student', ['students' => $students, 'messages'=>$student->name." Supprimée avec succée"]);
        //return redirect()->route('admin.index.student.index')->with('success', 'Étudiant supprimé avec succès.');
    }


}
