<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
	public function showAdminSpace()
    {
        return view('admin.template');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'utilisateur est connecté

            if (Auth::user()->role == 'admin') {
            // Si l'utilisateur a le rôle "student", redirigez-le vers le tableau de bord des étudiants
              return redirect()->intended('/admin/index');
            } else if(Auth::user()->role == 'student') {
                // Si l'utilisateur a un autre rôle, redirigez-le vers le tableau de bord par défaut
                return redirect()->intended('/students/index');
            }else{
                return redirect()->intended('/instructors/template');
            }
        }

        // Si l'authentification échoue, redirigez l'utilisateur vers le formulaire de connexion avec un message d'erreur
        return redirect()->back()->withInput()->withErrors(['email' => 'Email ou mot de passe incorrect']);
    }
}
