<?php

namespace App\Services\Payment;

use App\Contracts\PaymentStrategy;

readonly class PaymentContext
{
    private PaymentStrategy $paymentStrategy;

    public function setPaymentStrategy(PaymentStrategy $paymentStrategy): void
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function processPayment(float $amount)
    {
        return $this->paymentStrategy->pay($amount);
    }
}
