<?php

namespace App\Services\Payment;

use App\Contracts\PaymentStrategy;

class CreditCardPaymentStrategy implements PaymentStrategy
{
    public function pay(float $amount): array
    {
        // Logique de paiement avec Carte Bancaire
        return [
            'amount' => $amount,
            'currency' => '€',
            'payment_method' => 'Carte Bancaire',
        ];
    }
}
