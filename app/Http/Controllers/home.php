<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function __invoke(){
        
        return view('home');
        
    }

    public function principal(){
        
        return view('principal');
        
    }
}
