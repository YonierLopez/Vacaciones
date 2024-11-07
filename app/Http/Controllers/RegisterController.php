<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo User

class RegisterController extends Controller
{
    /**
     * Muestra el formulario de registro.
     */
    public function index()
    {
        return view('register.index'); // Asegúrate de tener la vista 'register.index'
    }

    /**
     * Procesa el formulario de registro y crea el usuario.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        // Crear un nuevo usuario
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Redirigir o hacer lo que necesites después del registro
        return redirect()->route('login')->with('success', 'Registro exitoso. Ahora puedes iniciar sesión.');
    }
}
