<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class Money extends Dto
{
    /**
     * @param  string  $currencyCode  Three digit currency code in ISO 4217 format.
     * @param  string  $amount  A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. <br>**Pattern** : `^-?(0|([1-9]\d*))(\.\d+)?([eE][+-]?\d+)?$`.
     */
    public function __construct(
        public readonly string $currencyCode,
        public readonly string $amount,
    ) {
    }
}
