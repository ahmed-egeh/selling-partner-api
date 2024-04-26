<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class ChargeComponent extends Dto
{
    protected static array $attributeMap = ['chargeType' => 'ChargeType', 'chargeAmount' => 'ChargeAmount'];

    /**
     * @param  ?string  $chargeType  The type of charge.
     * @param  ?Currency  $chargeAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $chargeType = null,
        public readonly ?Currency $chargeAmount = null,
    ) {
    }
}
