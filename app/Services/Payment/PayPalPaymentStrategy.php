<?php

namespace App\Services\Payment;

use App\Contracts\PaymentStrategy;

class PayPalPaymentStrategy implements PaymentStrategy
{
    public function pay(float $amount): array
    {
        // Logique de paiement avec PayPal
        return [
            'amount' => $amount,
            'currency' => '€',
            'payment_method' => 'PayPal',
        ];
    }
}
