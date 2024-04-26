<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class TrackingAddress extends Dto
{
    /**
     * @param  string  $city  The city.
     * @param  string  $state  The state.
     * @param  string  $country  The country.
     */
    public function __construct(
        public readonly string $city,
        public readonly string $state,
        public readonly string $country,
    ) {
    }
}
