<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class principal extends Controller
{
    public function showDashboard(){
        $user = session('user'); // Obtener el usuario de la sesión
        return view('principal', compact('user'));
    }

    public function logout(){
        session()->forget('user');
        Auth::logout();
        return redirect('/')->with('success', 'Has cerrado sesión correctamente.');
    }
}

