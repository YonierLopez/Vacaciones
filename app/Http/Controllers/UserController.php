<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los usuarios
        $users = User::all();
        return view('users.index', compact('users')); // Vista de listado de usuarios
    }

    public function create()
    {
        // Mostrar el formulario para crear un nuevo usuario
        return view('users.create'); // Vista de creación de usuario
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'document_type' => 'required|string|max:255',
            'document_number' => 'required|string|max:255|unique:users',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Crear un nuevo usuario
        $validated['password'] = bcrypt($validated['password']); // Encriptar la contraseña
        User::create($validated);

        // Redirigir con mensaje de éxito
        return redirect()->route('users.index')->with('success', 'Usuario creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // Mostrar los detalles de un usuario específico
        return view('users.show', compact('user')); // Vista de detalles de usuario
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // Mostrar el formulario para editar un usuario
        return view('users.edit', compact('user')); // Vista de edición de usuario
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'document_type' => 'required|string|max:255',
            'document_number' => 'required|string|max:255|unique:users,document_number,' . $user->id,
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        // Actualizar el usuario
        if ($request->filled('password')) {
            $validated['password'] = bcrypt($validated['password']); // Encriptar la nueva contraseña
        } else {
            unset($validated['password']); // No actualizar la contraseña si no se proporciona una
        }

        $user->update($validated);

        // Redirigir con mensaje de éxito
        return redirect()->route('users.index')->with('success', 'Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Eliminar un usuario
        $user->delete();

        // Redirigir con mensaje de éxito
        return redirect()->route('users.index')->with('success', 'Usuario eliminado con éxito');
    }
}
