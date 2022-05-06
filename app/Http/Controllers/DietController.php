<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DietController extends Controller
{
    public function getDiet(){
        return view('diet');
    }
}
