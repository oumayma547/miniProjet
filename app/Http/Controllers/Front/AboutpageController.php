<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutpageController extends Controller
{
    public function about()
    {

        return view('front.about');
    }
}
