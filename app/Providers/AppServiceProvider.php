<?php

namespace App\Providers;

use App\Enums\PaymentTypeEnum;
use App\Services\Payment\CreditCardPaymentStrategy;
use App\Services\Payment\OrangeMoneyPaymentStrategy;
use App\Services\Payment\PayPalPaymentStrategy;
use App\Services\Payment\WavePaymentStrategy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentTypeEnum::CREDIT_CARD, CreditCardPaymentStrategy::class);
        $this->app->bind(PaymentTypeEnum::ORANGE_MONEY, OrangeMoneyPaymentStrategy::class);
        $this->app->bind(PaymentTypeEnum::PAYPAL, PayPalPaymentStrategy::class);
        $this->app->bind(PaymentTypeEnum::WAVE, WavePaymentStrategy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
