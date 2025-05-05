<?php

namespace App\Services;

use Paydunya\Checkout\CheckoutInvoice;
use Paydunya\Setup;

class PaydunyaService
{
    public function __construct()
    {
        Setup::setMasterKey(config('paydunya.master_key'));
        Setup::setPrivateKey(config('paydunya.private_key'));
        Setup::setPublicKey(config('paydunya.public_key'));
        Setup::setToken(config('paydunya.token'));
        Setup::setMode(config('paydunya.mode'));
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

        if ($invoice->create()) {
            return $invoice->getInvoiceUrl();
        }

        return null;
    }
}
