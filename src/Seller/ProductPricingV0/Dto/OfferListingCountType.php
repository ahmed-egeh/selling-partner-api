<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class OfferListingCountType extends Dto
{
    protected static array $attributeMap = ['count' => 'Count'];

    /**
     * @param  int  $count  The number of offer listings.
     * @param  string  $condition  The condition of the item.
     */
    public function __construct(
        public readonly int $count,
        public readonly string $condition,
    ) {
    }
}
