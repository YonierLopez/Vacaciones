<?php
namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        $billings = Billing::all();
        return view('billings.index', compact('billings'));
    }

    public function create()
    {
        return view('billings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount_due' => 'required|numeric',
        ]);

        Billing::create($validated);

        return redirect()->route('billings.index')->with('success', 'Facturación creada con éxito');
    }

    public function show(Billing $billing)
    {
        return view('billings.show', compact('billing'));
    }

    public function edit(Billing $billing)
    {
        return view('billings.edit', compact('billing'));
    }

    public function update(Request $request, Billing $billing)
    {
        $validated = $request->validate([
            'amount_due' => 'required|numeric',
        ]);

        $billing->update($validated);

        return redirect()->route('billings.index')->with('success', 'Facturación actualizada con éxito');
    }

    public function destroy(Billing $billing)
    {
        $billing->delete();

        return redirect()->route('billings.index')->with('success', 'Facturación eliminada con éxito');
    }
}
