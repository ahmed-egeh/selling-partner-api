<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\ListingOffersResponse;

final class GetListingOffersBatchResponse extends Response
{
    protected static array $complexArrayTypes = ['responses' => [ListingOffersResponse::class]];

    /**
     * @param  ListingOffersResponse[]|null  $responses  A list of `getListingOffers` batched responses.
     */
    public function __construct(
        public readonly ?array $responses = null,
    ) {
    }
}
