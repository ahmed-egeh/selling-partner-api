<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class Location extends Dto
{
    /**
     * @param  ?string  $type  Type of location identification.
     * @param  ?string  $locationCode  Location code.
     * @param  ?string  $countryCode  The two digit country code. In ISO 3166-1 alpha-2 format.
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $locationCode = null,
        public readonly ?string $countryCode = null,
    ) {
    }
}
