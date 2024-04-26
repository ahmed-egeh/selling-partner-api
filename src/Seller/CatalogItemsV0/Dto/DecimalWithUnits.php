<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use SellingPartnerApi\Dto;

final class DecimalWithUnits extends Dto
{
    protected static array $attributeMap = ['units' => 'Units'];

    /**
     * @param  ?float  $value  The decimal value.
     * @param  ?string  $units  The unit of the decimal value.
     */
    public function __construct(
        public readonly ?float $value = null,
        public readonly ?string $units = null,
    ) {
    }
}
