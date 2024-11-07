<?php

namespace App\Http\Controllers;

use App\Models\TouristPackage;
use Illuminate\Http\Request;

class TouristPackageController extends Controller
{
    public function index()
    {
        $touristPackages = TouristPackage::all();
        return view('touristPackages.index', compact('touristPackages'));
    }

    public function create()
    {
        return view('touristPackages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rate' => 'required|numeric',
            'itinerary' => 'required|string',
        ]);

        TouristPackage::create($validated);

        return redirect()->route('touristPackages.index')->with('success', 'Paquete turístico creado con éxito');
    }

    public function show(TouristPackage $touristPackage)
    {
        return view('touristPackages.show', compact('touristPackage'));
    }

    public function edit(TouristPackage $touristPackage)
    {
        return view('touristPackages.edit', compact('touristPackage'));
    }

    public function update(Request $request, TouristPackage $touristPackage)
    {
        $validated = $request->validate([
            'rate' => 'required|numeric',
            'itinerary' => 'required|string',
        ]);

        $touristPackage->update($validated);

        return redirect()->route('touristPackages.index')->with('success', 'Paquete turístico actualizado con éxito');
    }

    public function destroy(TouristPackage $touristPackage)
    {
        $touristPackage->delete();

        return redirect()->route('touristPackages.index')->with('success', 'Paquete turístico eliminado con éxito');
    }
}
