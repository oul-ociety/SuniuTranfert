<?php

namespace App\Http\Controllers;

use App\Services\PaydunyaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaydunyaController extends Controller
{
    public function pay(Request $request, PaydunyaService $paydunya)
    {
        $messages = [
            'montant.required' => 'Le montant est requis.',
            'montant.numeric' => 'Le montant doit être un nombre.',
            'montant.min' => 'Le montant doit être supérieur à zéro.',
            'pays.required' => 'Le pays est requis.',
            'service_debit.required' => 'Le service de débit est requis.',
            'service_credit.required' => 'Le service de crédit est requis.',
        ];

        $validated = $request->validate([
            'montant' => 'required|numeric|min:1',
            'pays' => 'required|string',
            'service_debit' => 'required|string',
            'service_credit' => 'required|string',
        ], $messages);

        $url = $paydunya->createInvoice($validated);
        if ($url) {
            return redirect($url);
        }

        // Log the failed attempt for debugging
        Log::error('Failed to create PayDunya invoice', ['data' => $validated]);

        return back()->with('error', 'Erreur lors de la création du paiement. Veuillez réessayer plus tard.');
    }

    public function callback(Request $request)
    {
        // Log the PayDunya callback data
        Log::info('Callback PayDunya', $request->all());

        return response('OK', 200);
    }

    public function success()
    {
        return view('paydunya.success');
    }

    public function cancel()
    {
        return view('paydunya.cancel');
    }
}
