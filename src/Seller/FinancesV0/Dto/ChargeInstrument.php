<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class ChargeInstrument extends Dto
{
    protected static array $attributeMap = ['description' => 'Description', 'tail' => 'Tail', 'amount' => 'Amount'];

    /**
     * @param  ?string  $description  A short description of the charge instrument.
     * @param  ?string  $tail  The account tail (trailing digits) of the charge instrument.
     * @param  ?Currency  $amount  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?string $tail = null,
        public readonly ?Currency $amount = null,
    ) {
    }
}
