<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class ContainerSpecification extends Dto
{
    /**
     * @param  Dimensions  $dimensions  A set of measurements for a three-dimensional object.
     * @param  Weight  $weight  The weight.
     */
    public function __construct(
        public readonly Dimensions $dimensions,
        public readonly Weight $weight,
    ) {
    }
}
