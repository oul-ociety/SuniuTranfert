<?php

namespace App\Http\Controllers;

use App\Services\PaydunyaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaydunyaController extends Controller
{
    public function pay(Request $request, PaydunyaService $paydunya)
    {
        $validated = $request->validate([
            'montant' => 'required|numeric',
            'pays' => 'required|string',
            'service_debit' => 'required|string',
            'service_credit' => 'required|string',
        ]);

        $url = $paydunya->createInvoice($validated);

        if ($url) {
            return redirect($url);
        }

        return back()->with('error', 'Erreur lors de la création du paiement.');
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
