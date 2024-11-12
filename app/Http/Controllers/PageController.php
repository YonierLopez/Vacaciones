<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Método para la página de inicio
    public function inicio()
    {
        return view('inicio'); // vista inicio.blade.php
    }

    // Método para la página de sobre nosotros
    public function sobreNosotros()
    {
        return view('sobreNosotros'); // vista sobreNosotros.blade.php
    }

    // Método para la página de planes turísticos
    public function planesTuristicos()
    {
        return view('planesTuristicos'); // vista planesTuristicos.blade.php
    }

    // Método para la página de contacto
    public function contacto()
    {
        return view('contacto'); // vista contacto.blade.php
    }
}
