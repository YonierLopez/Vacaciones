<?php
namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'status' => 'required|string|max:255',
            'quantity' => 'required|integer',
        ]);

        Reservation::create($validated);

        return redirect()->route('reservations.index')->with('success', 'Reserva creada con éxito');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'status' => 'required|string|max:255',
            'quantity' => 'required|integer',
        ]);

        $reservation->update($validated);

        return redirect()->route('reservations.index')->with('success', 'Reserva actualizada con éxito');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reserva eliminada con éxito');
    }
}
