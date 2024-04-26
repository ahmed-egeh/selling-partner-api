<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class IneligibilityReason extends Dto
{
    /**
     * @param  string  $code  Reasons that make a shipment service offering ineligible.
     * @param  string  $message  The ineligibility reason.
     */
    public function __construct(
        public readonly string $code,
        public readonly string $message,
    ) {
    }
}
