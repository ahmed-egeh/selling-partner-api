<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class IneligibleRate extends Dto
{
    protected static array $complexArrayTypes = ['ineligibilityReasons' => [IneligibilityReason::class]];

    /**
     * @param  string  $serviceId  An identifier for the shipping service.
     * @param  string  $serviceName  The name of the shipping service.
     * @param  string  $carrierName  The carrier name for the offering.
     * @param  string  $carrierId  The carrier identifier for the offering, provided by the carrier.
     * @param  IneligibilityReason[]  $ineligibilityReasons  A list of reasons why a shipping service offering is ineligible.
     */
    public function __construct(
        public readonly string $serviceId,
        public readonly string $serviceName,
        public readonly string $carrierName,
        public readonly string $carrierId,
        public readonly array $ineligibilityReasons,
    ) {
    }
}
