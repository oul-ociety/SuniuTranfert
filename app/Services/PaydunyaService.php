<?php

namespace App\Services;

use Paydunya\Checkout\CheckoutInvoice;
use Paydunya\Checkout\Store;
use Paydunya\Setup;
use Illuminate\Support\Facades\Log;

class PaydunyaService
{
    public function __construct()
    {
        // Configuration des clés API
        Setup::setMasterKey(config('paydunya.master_key'));
        Setup::setPrivateKey(config('paydunya.private_key'));
        Setup::setPublicKey(config('paydunya.public_key'));
        Setup::setToken(config('paydunya.token'));
        Setup::setMode(config('paydunya.mode', 'sandbox'));

        // Configuration du magasin (informations affichées sur la page de paiement)
        Store::setName(config('paydunya.company_name'));
        Store::setTagline("Le meilleur service de transfert d'argent.");
        Store::setPhoneNumber("+221123456789");
        Store::setPostalAddress("Dakar, Sénégal");
        Store::setWebsiteUrl(config('paydunya.company_website'));
        Store::setLogoUrl(config('paydunya.company_logo'));
    }

    public function createInvoice($data)
    {
        $invoice = new CheckoutInvoice();

        $invoice->setTotalAmount($data['montant']);
        $invoice->addItem("Transfert d'argent", 1, $data['montant'], $data['montant'], "Vers " . $data['service_credit']);
        $invoice->addCustomData("pays", $data['pays']);
        $invoice->addCustomData("service_debit", $data['service_debit']);
        $invoice->addCustomData("service_credit", $data['service_credit']);
        $invoice->setCallbackUrl(route('paydunya.callback'));
        $invoice->setReturnUrl(route('paydunya.success'));
        $invoice->setCancelUrl(route('paydunya.cancel'));

        if ($invoice && $invoice->create()) {
            return $invoice->getInvoiceUrl();
        }

        // Log des erreurs si l'appel échoue
        if ($invoice) {
            Log::error('Erreur création facture PayDunya');
            Log::error('Code réponse : ' . ($invoice->response_code ?? 'Non défini'));
            Log::error('Texte réponse : ' . ($invoice->response_text ?? 'Non défini'));
        } else {
            Log::error('Erreur création facture PayDunya - L\'objet facture est nul');
        }

        return null;
    }
}
