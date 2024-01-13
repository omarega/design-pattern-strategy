<?php

namespace App\Services\Payment;

use App\Contracts\PaymentStrategy;

class OrangeMoneyPaymentStrategy implements PaymentStrategy
{
    public function pay(float $amount): array
    {
        // Logique de paiement avec Orange Money
        return [
            'amount' => $amount,
            'currency' => '€',
            'payment_method' => 'Orange Money',
        ];
    }
}
