<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaloriesController extends Controller
{
    public function getCalories(){
        return view('calories');
    }
}
