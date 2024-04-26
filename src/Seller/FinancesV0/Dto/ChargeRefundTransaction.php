<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class ChargeRefundTransaction extends Dto
{
    protected static array $attributeMap = ['chargeAmount' => 'ChargeAmount', 'chargeType' => 'ChargeType'];

    /**
     * @param  ?Currency  $chargeAmount  A currency type and amount.
     * @param  ?string  $chargeType  The type of charge.
     */
    public function __construct(
        public readonly ?Currency $chargeAmount = null,
        public readonly ?string $chargeType = null,
    ) {
    }
}
