<?php
namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $paymentMethods = PaymentMethod::all();
        return view('paymentMethods.index', compact('paymentMethods'));
    }

    public function create()
    {
        return view('paymentMethods.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'payment_type' => 'required|string|max:255',
            'payment_made' => 'required|boolean',
            'payment_date' => 'required|date',
        ]);

        PaymentMethod::create($validated);

        return redirect()->route('paymentMethods.index')->with('success', 'Método de pago creado con éxito');
    }

    public function show(PaymentMethod $paymentMethod)
    {
        return view('paymentMethods.show', compact('paymentMethod'));
    }

    public function edit(PaymentMethod $paymentMethod)
    {
        return view('paymentMethods.edit', compact('paymentMethod'));
    }

    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        $validated = $request->validate([
            'payment_type' => 'required|string|max:255',
            'payment_made' => 'required|boolean',
            'payment_date' => 'required|date',
        ]);

        $paymentMethod->update($validated);

        return redirect()->route('paymentMethods.index')->with('success', 'Método de pago actualizado con éxito');
    }

    public function destroy(PaymentMethod $paymentMethod)
    {
        $paymentMethod->delete();

        return redirect()->route('paymentMethods.index')->with('success', 'Método de pago eliminado con éxito');
    }
}
