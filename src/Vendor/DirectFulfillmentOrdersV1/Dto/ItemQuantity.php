<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class ItemQuantity extends Dto
{
    /**
     * @param  ?int  $amount  Acknowledged quantity. This value should not be zero.
     * @param  ?string  $unitOfMeasure  Unit of measure for the acknowledged quantity.
     */
    public function __construct(
        public readonly ?int $amount = null,
        public readonly ?string $unitOfMeasure = null,
    ) {
    }
}
