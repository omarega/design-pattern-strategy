<?php

namespace App\Services\Payment;

use App\Contracts\PaymentStrategy;

class WavePaymentStrategy implements PaymentStrategy
{
    public function pay(float $amount): array
    {
        return [
            'amount' => $amount,
            'currency' => '€',
            'payment_method' => 'Wave',
        ];
    }
}
