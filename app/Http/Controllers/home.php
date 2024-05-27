<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class home extends Controller
{
    public function __invoke(){
        
        return view('home');
        
    }

    public function principal(){
        
        return view('principal');
        
    }

    public function registro(){
        
        return view('registro');
        
    }

    public function guardarRegistro(Request $request)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'cc' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Crear un nuevo usuario
        $user = new User();
        $user->cc = $validatedData['cc'];
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        // Redirigir a una página de éxito, por ejemplo
        return redirect(url('/registro'))->with('success', 'Usuario registrado exitosamente.');
    }

    public function login(Request $request)
    {
        // Validación de los datos del formulario
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            $user = Auth::user();
            session(['user' => $user]);
            return redirect()->intended('/principal');
        }

        // Autenticación fallida
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no son válidas.',
        ]);
    }


}
