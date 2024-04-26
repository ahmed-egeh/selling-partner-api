<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use SellingPartnerApi\Dto;

final class MoneyType extends Dto
{
    protected static array $attributeMap = ['currencyCode' => 'CurrencyCode', 'amount' => 'Amount'];

    /**
     * @param  ?string  $currencyCode  The currency code in ISO 4217 format.
     * @param  ?float  $amount  The monetary value.
     */
    public function __construct(
        public readonly ?string $currencyCode = null,
        public readonly ?float $amount = null,
    ) {
    }
}
