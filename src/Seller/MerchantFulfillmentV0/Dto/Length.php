<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class Length extends Dto
{
    /**
     * @param  ?float  $value  The value in units.
     * @param  ?string  $unit  The unit of length.
     */
    public function __construct(
        public readonly ?float $value = null,
        public readonly ?string $unit = null,
    ) {
    }
}
