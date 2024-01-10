<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AsinIdentifier extends BaseDto
{
    /**
     * @param  string  $marketplaceId A marketplace identifier.
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $asin,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}