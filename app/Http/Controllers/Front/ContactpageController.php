<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactpageController extends Controller
{
    public function contact()
    {
        return view('front.contact');
    }
}
