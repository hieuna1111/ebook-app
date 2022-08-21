<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Draft()
 * @method static static Pending()
 * @method static static Success()
 */
final class OrderStatus extends Enum
{
    const Draft =   'draft';
    const Pending =   'pending';
    const Success = 'success';
    const Failure = 'failure';
}
