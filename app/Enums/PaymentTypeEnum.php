<?php

namespace App\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self WAVE()
 * @method static self ORANGE_MONEY()
 * @method static self PAYPAL()
 * @method static self CREDIT_CARD()
 */
class PaymentTypeEnum extends Enum
{
    public const CREDIT_CARD = 'credit_card';
    public const ORANGE_MONEY = 'orange_money';
    public const PAYPAL = 'paypal';
    public const WAVE = 'wave';

    protected static function values(): array
    {
        return [
            'CREDIT_CARD' => self::CREDIT_CARD,
            'ORANGE_MONEY' => self::ORANGE_MONEY,
            'PAYPAL' => self::PAYPAL,
            'WAVE' => self::WAVE,
        ];
    }
}
