<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;

class ChatController extends Controller
{
    public function chat()
    {

        $courses = Course::select('id', 'cat_id', 'trainer_id', 'name', 'small_desc', 'img')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
        return view('front.chat')->with('courses', $courses);
    }
}
