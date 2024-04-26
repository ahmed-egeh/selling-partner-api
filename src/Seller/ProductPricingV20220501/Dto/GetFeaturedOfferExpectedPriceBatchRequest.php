<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class GetFeaturedOfferExpectedPriceBatchRequest extends Dto
{
    protected static array $complexArrayTypes = ['requests' => [FeaturedOfferExpectedPriceRequest::class]];

    /**
     * @param  FeaturedOfferExpectedPriceRequest[]|null  $requests  A batched list of featured offer expected price requests.
     */
    public function __construct(
        public readonly ?array $requests = null,
    ) {
    }
}
