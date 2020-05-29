<?php

namespace App\Http\Controllers;

use App\Sample;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function getAboutPage(Request $request){


        return view('web.about');
    }

    public function getSupportPage(Request $request){


        return view('web.support');
    }

    public function getContactPage(Request $request){


        return view('web.contact');
    }
}
