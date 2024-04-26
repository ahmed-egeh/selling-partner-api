<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Currency extends Dto
{
    /**
     * @param  float  $value  The monetary value.
     * @param  string  $unit  The ISO 4217 format 3-character currency code.
     */
    public function __construct(
        public readonly float $value,
        public readonly string $unit,
    ) {
    }
}