<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use SellingPartnerApi\Dto;

final class PriceToEstimateFees extends Dto
{
    protected static array $attributeMap = [
        'listingPrice' => 'ListingPrice',
        'shipping' => 'Shipping',
        'points' => 'Points',
    ];

    /**
     * @param  ?MoneyType  $shipping
     * @param  ?Points  $points
     */
    public function __construct(
        public readonly MoneyType $listingPrice,
        public readonly ?MoneyType $shipping = null,
        public readonly ?Points $points = null,
    ) {
    }
}
