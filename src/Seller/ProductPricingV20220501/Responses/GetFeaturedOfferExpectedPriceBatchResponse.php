<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductPricingV20220501\Dto\FeaturedOfferExpectedPriceResponse;

final class GetFeaturedOfferExpectedPriceBatchResponse extends Response
{
    protected static array $complexArrayTypes = ['responses' => [FeaturedOfferExpectedPriceResponse::class]];

    /**
     * @param  FeaturedOfferExpectedPriceResponse[]|null  $responses  A batched list of featured offer expected price responses.
     */
    public function __construct(
        public readonly ?array $responses = null,
    ) {
    }
}
