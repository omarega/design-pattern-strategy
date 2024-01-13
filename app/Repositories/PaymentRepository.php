<?php

namespace App\Repositories;

use App\Models\PaymentMethod;
use App\Services\Payment\PaymentContext;

readonly class PaymentRepository
{
    public function __construct(
        private PaymentContext $paymentContext,
        private PaymentMethod $paymentMethod
    ) {}

    /**
     * @param $request
     * @return array
     */
    public function processPayment($request): array
    {
        $providerId = $request->provider_id;
        $provider = $this->paymentMethod->findOrFail($providerId, ['name']);
        $amount = $request->amount;
        $paymentStrategy = app($provider->name);

        // Injectez la stratégie dans le contexte de paiement
        $this->paymentContext->setPaymentStrategy($paymentStrategy);

        // Processus de paiement avec la stratégie sélectionnée
        return $this->paymentContext->processPayment($amount);
    }
}
