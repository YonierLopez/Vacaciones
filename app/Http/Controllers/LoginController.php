<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Usamos Auth para manejar la autenticación

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function index()
    {
        return view('login.index');  // Retornamos la vista con el formulario de login
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        // Validamos los datos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Intentamos autenticar con las credenciales del usuario
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Si la autenticación es exitosa, redirigimos a la página de inicio (o página solicitada)
            return redirect()->intended('/home');
        }

        // Si las credenciales no son correctas, retornamos con un error
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no son correctas.',
        ]);
    }

    /**
     * Handle the logout request.
     */
    public function logout()
    {
        Auth::logout();  // Cerramos sesión
        return redirect('/');  // Redirigimos al inicio
    }
}
