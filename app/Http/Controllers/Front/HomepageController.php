<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;

class HomepageController extends Controller
{
    public function index()
    {
        //bech nejbed data mel BD
        /* $data['courses'] = Course::select('id', 'cat_id', 'trainer_id', 'name', 'small-desc', 'img')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get(); //bech nekhou naaml affichage juste lel 3 courses


        return view('front.index');*/

        $courses = Course::select('id', 'cat_id', 'trainer_id', 'name', 'small_desc', 'img')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        // Charger la vue avec les données récupérées
        return view('front.index')->with('courses', $courses);
    }
}