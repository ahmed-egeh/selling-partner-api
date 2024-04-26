<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SellersV1\Dto;

use SellingPartnerApi\Dto;

final class Participation extends Dto
{
    /**
     * @param  bool  $hasSuspendedListings  Specifies if the seller has suspended listings. True if the seller Listing Status is set to Inactive, otherwise False.
     */
    public function __construct(
        public readonly bool $isParticipating,
        public readonly bool $hasSuspendedListings,
    ) {
    }
}
