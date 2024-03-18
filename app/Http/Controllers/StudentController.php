<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
